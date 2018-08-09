require 'mina/bundler'
require 'mina/rails'
require 'mina/git'

account = 'cartron'

set :repository, 'git@gitlab.com:logomotion/cartron'
set :branch, 'master'

set :domain, 'logomotion.fr'
set :user, 'root'

set :forward_agent, true
set :term_mode, nil

set :deploy_to, "/home/#{account}/src_dev/www" if ENV['on'] == 'dev'
set :deploy_to, "/home/#{account}/src_prod/www" if ENV['on'] == 'prod'

set :shared_dirs, ['vendor', 'htdocs/upload', 'htdocs/videos']
set :shared_files, ['htdocs/.htaccess', 'htdocs/robots.txt', 'app/config/parameters.yml']

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