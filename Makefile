DOCKER_COMPOSE_FILE=./docker/docker-compose.yml

DEFAULT_GOAL := help
help:
	@awk 'BEGIN {FS = ":.*##"; printf "\nUsage:\n  make \033[36m<target>\033[0m\n"} /^[a-zA-Z0-9_-]+:.*?##/ { printf "  \033[36m%-27s\033[0m %s\n", $$1, $$2 } /^##@/ { printf "\n\033[1m%s\033[0m\n", substr($$0, 5) } ' $(MAKEFILE_LIST)

.PHONY: docker-build
docker-build: docker-stop ## Build docker images
	docker-compose -f $(DOCKER_COMPOSE_FILE) build

.PHONY: docker-run
docker-run: ## Start containers
	docker-compose -f $(DOCKER_COMPOSE_FILE) up -d

.PHONY: docker-stop
docker-stop: ## Stop docker containers
	docker-compose -f $(DOCKER_COMPOSE_FILE) down