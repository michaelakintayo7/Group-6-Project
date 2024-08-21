#!/bin/bash

set -e

resourceGroup=$1
aksCluster=$2
image=$3

# Get AKS credentials
az aks get-credentials --resource-group $resourceGroup --name $aksCluster

# Apply Kubernetes manifests
kubectl apply -f k8s/deployment.yaml
kubectl apply -f k8s/service.yaml

# Verify deployment
kubectl get deployments
kubectl get services
