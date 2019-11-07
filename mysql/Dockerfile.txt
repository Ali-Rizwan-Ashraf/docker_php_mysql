#FROM mysql:8.0
#WORKDIR /application
#VOLUME .:/application
#
#        container_name: mysql-server-80
#        command: --default-authentication-plugin=mysql_native_password
#        
#        restart: always
#        environment:
#          - MYSQL_ROOT_PASSWORD=pwd
#          - MYSQL_DATABASE=my_db
#          - MYSQL_USER=db_user
#          - MYSQL_PASSWORD=.mypwd
#        ports:
#          - "8082:3306"