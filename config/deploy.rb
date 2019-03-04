require 'mina/bundler'
require 'mina/rails'
require 'mina/git'

account = 'cartron'

set :repository, 'git@gitlab.com:logomotion/cartron-www'
set :branch, 'master'

set :domain, '164.132.169.100'
set :user, 'root'

set :forward_agent, true
set :term_mode, nil

set :deploy_to, "/home/#{account}/src_dev/www" if ENV['on'] == 'dev'
set :deploy_to, "/home/#{account}/src_prod/www" if ENV['on'] == 'prod'

set :shared_dirs, ['web/upload', 'web/videos']
set :shared_files, ['web/.htaccess', 'web/robots.txt', 'app/config/parameters.yml']

task :deploy => :environment do
	deploy do
		invoke :'git:clone'
		invoke :'deploy:cleanup'
		invoke :'deploy:link_shared_paths'
		on :launch do
			command "find #{fetch(:deploy_to)} -type d -exec chmod 755 {} +"
			command "find #{fetch(:deploy_to)} -type f -exec chmod 644 {} +"
			command "chown -R #{account}:#{account} #{fetch(:deploy_to)}"
		end
	end
end