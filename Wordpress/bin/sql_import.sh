docker exec -it mysql bash -c "mysql -uroot -proot wordpress -e \"drop database wordpress\""
docker exec -it mysql bash -c "mysql -uroot -proot -e \"create database wordpress\""
docker exec -it mysql bash -c "mysql -uroot -proot wordpress < /var/dump/wordpress.sql"