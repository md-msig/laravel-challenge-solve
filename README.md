# laravel-challenge-solve

Installation
1.	Install Virtualbox and Vagrant
    - You must have to enable hardware virtualization (VT-x).
    - You need to download Virtualbox and Vagrant. 
        - Virtualbox download link: https://www.virtualbox.org/wiki/Downloads 
        - vagrant download link: https://www.vagrantup.com/downloads.html
    - You need to git bash. 
        - Download link: https://git-scm.com/download/win
    - You need to add the laravel/homestead box to your Vagrant installation. 
        - Open the git bash in administrator mode. 
        - And run the following command.

        - vagrant box add laravel/homestead

    - Clone the Homestead repository into a Homestead folder within your home (C:\Users\USER_NAME) directory.
        - git clone https://github.com/laravel/homestead.git Homestead

        - And run following two commands.
            - cd Homestead 
            - bash init.sh

    - Run the following command.
        - ssh-keygen -t rsa -C “your_email@example.com”
    - You can edit the Homestead.yaml in C:\Users\USER_NAME\homestead_directory which is main configuration file.
    - Run the following command to run the vagrant box. 
        - vagrant up
    - And run the following command to login to your vagrant box. 
        - vagrant ssh
2.	Run the Project
    - In git bash, input "cd code" and press enter.
    - Clone the git repo. 
        - git clone https://github.com/md-msig/laravel-challenge-solve.git
    - Run the following commands. 
        - cd Laravel52 
        - php artisan serve
    - And type homestead.test in your browser and press enter.

