#####deploy app in kubernetes:
```
kubectl apply -f kubernetes/deployment.yaml -f kubernetes/service.yaml
```


#####run `appropriate:curl` in kubernetes:
```
kubectl run curl --image=appropriate/curl:latest --port=80 -- curl http://consumer?data=test
```
