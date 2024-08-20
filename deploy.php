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
