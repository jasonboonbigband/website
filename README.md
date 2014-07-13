# jbbb website

## site specific infos

### add a new page

```
cp index.php <newpage>.php
```

<edit the new page>

add the new page to the $sites array in navigation.php


## update/deploy infos

### first time checkout

```
mkdir jbbb
cd jbbb
git clone git@github.com:jasonboonbigband/website.git website
```

### make changes

```
cd jbbb/website
git pull
```

<edit files>

```
git add .
git commit -m '<describe your updates here>'
git push origin master
```

### make changes live
a cronjob on the webserver checks out the live branch every minute using a read-only deploy-key

to merge changes from master(development branch) into live and push them to github:

```
git checkout live
git merge master
git checkout master
git push --all
```
