ls
whoami
id
cd /
top
cd /home/sysadmin
mount /dev/sdb1 /mnt/
cp /mnt/banking.txt.gpg /home/sysadmin/
gpg --batch --yes --passphrase "@\!YOUcantGUESSthis#@\!" --decrypt banking.txt.pgp
umount /mnt/
ps -ef
