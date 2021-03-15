<?php

namespace AppBundle\Console;

use AppBundle\Entity\Contact;
use AppBundle\Entity\User;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use AppBundle\Entity\HomePage;
use Psr\Log\LoggerInterface;

class InstagramCommand extends Command
{
    const API_ENDPOINT_INSTAGRAM = 'https://graph.instagram.com/me/media?fields=id,media_type,thumbnail_url,children{media_url,thumbnail_url,media_type},media_url,timestamp,caption&access_token=IGQVJWYThVemJMX05iRnpDRlA4bzFlRGlUS2xuaXVWS3BTYktWb25VbkVYMTZAXcm1WWlcwWnJ1YmU2OE5YREU5VFBTTnpmVk5vU0txZAFNRMVk5RHNkUkJNSkhzazV1anBWc2xFNlJ4dGY1THJ3ZAGpsUAZDZD&limit=1';
    protected static $defaultName = 'app:import-instagram-post';

    protected $managerRegistry;
    protected $logger;

    public function __construct(ManagerRegistry $managerRegistry, LoggerInterface $logger, $name = null)
    {
        $this->managerRegistry = $managerRegistry;
        $this->logger = $logger;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setDescription('add instagram post');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->logger->info('Starting porting instagram post');
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, self::API_ENDPOINT_INSTAGRAM);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = json_decode(curl_exec($ch));
        curl_close($ch);

        
        foreach(array_reverse($data->data) as $instaPostData){
            $existingHomePage = $this->managerRegistry->getRepository(HomePage::class)->findOneBy(['instagramId' => $instaPostData->id]);
            $this->logger->info('Id post instagram '.$instaPostData->id);
            if(!$existingHomePage){
                $this->logger->info('Creating new post instagram');
                $title = substr($instaPostData->caption,0,30 ).'...';
                $desc = $instaPostData->caption;

                $instaPost = new HomePage();    
                if($instaPostData->media_type === "CAROUSEL_ALBUM"){
                    $array = array();
                    foreach($instaPostData->children->data as $children){
                        array_push($array,['url' => $children->media_url, 'type' => $children->media_type]);
                    }

                    $instaPost->setInstagramSlider($array);
                }
                if($instaPostData->media_type == "VIDEO"){
                    $instaPost->setMiniatureVideo($instaPostData->thumbnail_url);
                }
                $instaPost
                    ->setTitleFr($title)
                    ->setTitreEn($title)
                    ->setDescFr($desc)
                    ->setDescEn($desc)
                    ->setImage($instaPostData->media_url)
                    ->setInstagram(true)
                    ->setType($instaPostData->media_type)
                    ->setInstagramId($instaPostData->id);
              
                $this->managerRegistry->getManager()->persist($instaPost);
            }else{
                $this->logger->info('Already exist');

            }
        }

        $this->managerRegistry->getManager()->flush();
        $this->logger->info('End porting instagram post');
        $output->writeln('done.');
        }
}