#!groovy

def imageName = 'hash-pipe'

def k8deployments = [
        dev : [namespace: 'staging', deployment: 'hash-pipe-dev', container: 'hash-pipe-dev'],
        master : [namespace: 'production', deployment: 'hash-pipe', container: 'hash-pipe'],
]

node() {
    stage 'checkout'
    checkout scm

    stage 'build'
    def ib = new media.nickel.workflow.jenkins.ImageBuilder()
    if (k8deployments.containsKey(env.BRANCH_NAME)) {
        ib.complex(imageName, '.', 'Dockerfile')
    } else {
        ib.complexWithoutPush(imageName, '.', 'Dockerfile')
    }

    if (k8deployments.containsKey(env.BRANCH_NAME)) {
        stage 'deploy'
        def k8 = new media.nickel.workflow.jenkins.Kubernetes()
        def deploymentName = k8deployments.get(env.BRANCH_NAME).deployment
        def deploymentEnvironment = k8deployments.get(env.BRANCH_NAME).namespace
        def containerName = k8deployments.get(env.BRANCH_NAME).container
        k8.deployImage(containerName, deploymentName, imageName, deploymentEnvironment, "${env.BRANCH_NAME}-${env.BUILD_ID}")
    }
}
