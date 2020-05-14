<?php

namespace AppBundle\Console;

use AppBundle\Entity\Contact;
use AppBundle\Entity\User;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Crypt all passwords from User entity using bcrypt.
 */
class CryptPasswordsCommand extends Command
{
    protected static $defaultName = 'app:user:crypt-passwords';

    protected $managerRegistry;
    protected $encoder;

    public function __construct(ManagerRegistry $managerRegistry, UserPasswordEncoderInterface $encoder, $name = null)
    {
        $this->managerRegistry = $managerRegistry;
        $this->encoder = $encoder;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setDescription('Crypt all passwords from User entity using bcrypt.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $users = $this->managerRegistry->getRepository(User::class)->findAll();

        /** @var User $user */
        foreach ($users as $user) {
            if (!empty($user->getPassword())) {
                $passwordEncoded = $this->encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($passwordEncoded);
            }
        }

        $this->managerRegistry->getManager()->flush();
        $output->writeln('done.');

        return 0;
    }
}
