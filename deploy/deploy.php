<?php

    namespace Deployer;
    
    require 'recipe/composer.php';
    require 'recipe/common.php';

    set('repository', 'git@gitlab.com:logomotion/cartron-www.git');
    set('git_tty', false);
    set('default_stage', 'dev');
    set('shared_files', ['web/.htaccess', 'web/robots.txt', 'app/config/parameters.yml']);
    set('shared_dirs', ['web/uploads', 'web/cache', 'app/logs', 'vendor']);
    set('bin/php', '/usr/local/bin/ea-php71 -c deploy/deploy.ini');

    host('staging.cartron.fr')
        ->stage('staging')
        ->user('root')
        ->hostname('ns4.logomotion-serveur.com')
        ->port('2222')
        ->set('account_dir', 'cartron')
        ->set('branch', 'staging')
        ->set('deploy_path', '/home/{{account_dir}}/src_staging');

    host('dev.cartron.fr')
    ->stage('dev')
    ->user('root')
    ->hostname('ns4.logomotion-serveur.com')
    ->port('2222')
    ->set('account_dir', 'cartron')
    ->set('branch', 'dev')
    ->set('deploy_path', '/home/{{account_dir}}/src_dev');
    

    task('deploy', [
        'deploy:info',
        'deploy:prepare',
        'deploy:lock',
        'deploy:release',
        'deploy:update_code',
        'deploy:shared',
        'deploy:writable',
        'deploy:clear_paths',
        'deploy:symlink',
        'deploy:unlock',
        'install',
        'permissions',
        'project-cleanup',
        'cleanup',
        'success'
    ]);

    task('project-cleanup', function () {
        run('rm -rf script/');
        run('rm -rf deploy/');
        run('rm -f docker-compose.yml Dockerfile settings.json .gitlab-ci.yml .gitignore .env-dist');
    });

    task('install', function () {
        // run('cd {{release_path}} && cp deploy/parameters.yml app/config/parameters.yml');
        run('cd {{release_path}} && curl -sS https://getcomposer.org/installer | {{bin/php}}');
        run('export SYMFONY_ENV=prod');
        run('cd {{release_path}} && {{bin/php}} composer.phar install --optimize-autoloader --no-scripts');
        run('cd {{release_path}} && {{bin/php}} bin/console cache:clear');
    });

    task('permissions', function () {
        run('find {{deploy_path}} -type d -exec chmod 755 {} +');
        run('find {{deploy_path}} -type f -exec chmod 644 {} +');
        run('chown -R {{account_dir}}:{{account_dir}} {{deploy_path}}');
    });

    after('deploy:failed', 'deploy:unlock');
