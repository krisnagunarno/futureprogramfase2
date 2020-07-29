pipeline {

  agent {
    // Run command on Docker-VM, instead inside Jenkins container.
    label 'App-VM'
  }

  stages {
    stage ('Test Pipeline') {
      steps {
        echo "Show Docker"
        sh '''
          docker --version
          docker image ls

          echo "You can do docker-compose, and other command here!!"
        '''
      }
    }
    stage ('Execute docker-compose') {
      steps {
        sh '''
          docker-compose stop
          docker-compose up --scale web=2 --scale php=2 --no-recreate -d
        '''
      }
    }

    stage ('Show Docker Info') {
      steps {
        sh '''
          docker-compose ps
          docker container ls
        '''
      }
    }
  }

}
