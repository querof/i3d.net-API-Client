
start_containers:
	docker-compose up -d

stop_containers:
	docker stop i3dnet-api-client_nginx_1 i3dnet-api-client_fpm_1 i3dnet-api-client_db_1

restart_containers:
	docker stop i3dnet-api-client_nginx_1 i3dnet-api-client_fpm_1 i3dnet-api-client_db_1
	docker-compose up -d
