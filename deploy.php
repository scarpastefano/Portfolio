<?php
namespace Deployer;

require 'recipe/laravel.php';

set('bin/php', function () {
    return '/bin/php8.3';
});

// Project name
// set('application', 'datarepository');

// Project repository
set('repository', 'git@github.com:scarpastefano/Portfolio.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', [
    '.env',
]);
set('shared_dirs', [
    'var/logs', 'var/sessions',
    'public/uploads',
    'public/data'
]);

// Writable dirs by web server
set('writable_dirs', [
    'var/sessions',
    'var/cache',
    'var/logs',
    'public/uploads',
    'public/data',
]);
set('composer_action', 'install');

set('bin_dir', 'bin');
set('var_dir', 'var');

set('keep_releases', 3);

// Hosts
host('195.231.86.127')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/html/portfolio');

// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

// before('deploy:symlink', 'database:migrate');