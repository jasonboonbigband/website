jbbb website
------------


checkout
--------

```
mkdir jbbb
cd jbbb
git clone git@github.com:jasonboonbigband/website.git website
```


make changes
------------

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

make changes live
-----------------
(a cronjob on the webserver checks out the live branch every minute using a read-only deploy-key)

merge changes from master(development branch) into live and push them to github:

```
git checkout live
git merge master
git checkout master
git push --all
```

