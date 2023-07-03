# How to use the piplelines v1

## Mobe into your project aka namespace
To move into your project's namespace, run the following command:
```
oc project "your namespace"
```

## Install the needed tasks
To install the required tasks, run the following commands:
```
tkn hub install task git-clone && tkn hub install task buildah
```

## Install all the needed credentials
To install the necessary credentials, apply the following YAML files:
```
oc apply -f code-repo-secret.yml
oc apply -f container-registry-secret.yml
oc create secret generic regcred --from-file=.dockerconfigjson=config.json --type=kubernetes.io/dockerconfigjson
```

## Add all needed permissions "Add noroot on next release"
To grant the required permissions, execute the following commands:
```
oc adm policy add-scc-to-user privileged -z pipeline
oc adm policy add-role-to-user edit -z pipeline
oc adm policy add-scc-to-user anyuid -z default
```

## Install Pipelines
```
oc apply -f pipeline.yaml
oc apply -f pipelinerun.yaml
```