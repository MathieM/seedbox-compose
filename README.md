# Seedbox-Compose

Full docker no bash file.

A docker-compose files to deploy complete Seedbox based only Docker. 

## Requirements

* [Git](https://git-scm.com/book/fr/v1/D%C3%A9marrage-rapide-Installation-de-Git)
* [Docker](https://www.docker.com/get-docker) 
* [docker-compos](https://docs.docker.com/compose/install/) 

## Install (5 simple steps)

### Short  (1 command)
2. Copy dist env file
    ```bash
    git clone https://github.com/MathieM/seedbox-compose.git && \
    cp .env.dist .env && \
    cp .default_config .share/config && \
    docker-compose up -d
    ```
### Detailed  (5 simple steps)
1. Clone this repo
2. Copy dist env file
    ```bash
    cp .env.dist .env
    ```
3. Edit `.env` file if needed.   
   For example to change domain
4. Copy default config if you want.  
   Replace `{CONFIG DIR}` like set in `.env` file
   ```bash
      cp .default_config {CONFIG DIR}
   ```
5. Launch containers
    ```bash
    docker-compose up -d
    ```

### Tested on ###
 * [x] Debian 8.X
 * [x] MacOS 10.X
 * [ ] Ubuntu 16.X
 * [ ] CentOS
 
### FAQ
 Q : Why you don't use bash file to simplify install ?   
 A : Because bash file add complexity and does not works properly on all system.
