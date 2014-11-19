role :db,           "production.studiocidra.com"
role :web,          "production.studiocidra.com"

set :stage,         "production"
set :branch,        "master"
set :deploy_to,     "/var/www/#{domain}/master"

# Open site after deploying
after "deploy" do
    system "open http://#{stage}.#{domain}/"
end
