role :db,           "staging.studiocidra.com"
role :web,          "staging.studiocidra.com"

set :stage,         "staging"

# Open site after deploying
after "deploy" do
    system "open http://#{branch}.#{stage}.#{domain}/"
end
