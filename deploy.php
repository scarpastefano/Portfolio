<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:scarpastefano/Portfolio.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('195.231.86.127')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/html/portfolio');

// Hooks

after('deploy:failed', 'deploy:unlock');



// <?php
// namespace Deployer;
// require 'recipe/laravel.php';

// // Configuration
// set('keep_releases', 5);
// set('ssh_type', 'native');
// set('ssh_multiplexing', true);
// set('branch', 'master');
// set('repository', 'git@ip:root/~/temp/repo.git');

// add('shared_files', [
//     '.env'
// ]);
// add('shared_dirs', [
//     'storage'
// ]);

// add('writable_dirs', [
//     'bootstrap/cache',
//     'storage',
//     'storage/app',
//     'storage/app/public',
//     'storage/framework',
//     'storage/framework/cache',
//     'storage/framework/sessions',
//     'storage/framework/views',
//     'storage/logs',
// ]);

// // Servers

// server('production', 'ip')
//     ->user('root')
//     ->identityFile()
//     ->configFile('~/.ssh/config')
//     ->set('deploy_path', '/var/www/domain')
//     ->pty(true);


// // Tasks

// task('upload:env', function () {
//     upload('.env.production', '{{deploy_path}}/shared/.env');
// })->desc('Environment setup');


// desc('Restart PHP-FPM service');
// task('php-fpm:restart', function () {
//     // The user must have rights for restart service
//     // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
//     run('sudo systemctl restart php-fpm.service');
// });
// after('deploy:symlink', 'php-fpm:restart');

// // [Optional] if deploy fails automatically unlock.
// after('deploy:failed', 'deploy:unlock');

// // Migrate database before symlink new release.
// desc('Deploy your project');
// task('deploy', [
//     'deploy:prepare',
//     'deploy:lock',
//     'deploy:release',
//     'deploy:update_code',
//     'deploy:shared',
//     'upload:env',
//     'deploy:vendors',
//     'deploy:writable',
//     'artisan:migrate',
//     'artisan:view:clear',
//     'artisan:cache:clear',
//     'artisan:config:cache',
//     'artisan:route:cache',
//     'artisan:optimize',
//     'deploy:symlink',
//     'deploy:unlock',
//     'cleanup',
// ]);



// before('deploy:symlink', 'artisan:migrate');