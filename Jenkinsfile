pipeline {

  agent {
    // Run command on Docker-VM, instead inside Jenkins container.
    label 'docker-vm'
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
  }

}
