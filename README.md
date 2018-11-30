# siteMarchand

Ouvrir la console et se placer à la racine du dossier:

# Installer le projet
  - composer->install(dev)
 
# Charger les fixtures
  - php bin/console doctrine:migtations:migrate
  - php bin/console doctrine:fixtures:load
  
# Compiler les assets
  - npm install
  - npm run dev-server
  
# Lancer le projet
  - php bin/console server:run
