# Work Plan Project
## Yazılım Hakkında

Developer’ların haftalık 45 saat çalıştığı varsayılarak, en kısa sürede işlerin bitmesini sağlayan bir algoritma ile haftalık developer bazında iş yapma programını ve işin minimum toplam kaç haftada biteceğini ekrana basacak bir ara yüz hazırlanmalı.

- Programlama Dili : **PHP**
- Kullanılan Framework : **Laravel**

## Projeyi Çalıştırma

Projeyi clone yaptıktan sonra ilk olarak, komut ekranını açarak aşağıdaki kodu çalıştırmanız gerekiyor. 

```
composer install 
```
**Not :** Komutun çalışması için composer'ın bilgisyarınızda kurulu olması gerekmektedir!

Sıradaki işlemimiz de .env dosyamızı açarak DB_DATABASE, DB_USERNAME, DB_PASSWORD doğru bir şekilde eklemek. Ardından tabloların veritabanımmızda oluşması için aşağıdaki komutu kullanabilirsiniz.  
```
php artisan migrate 
```
Bu komutu çalıştırdıktan sonra kullanacağımız tablolarımız veritabanımızda oluşacak. 
Proje için gerekli ilk verilerin oluşması için de aşağıdaki komut ile devam etmemiz gerekiyor
```
php artisan DB:seed 
```
Bu komut ile kullanıcılarımız otomatik bir şekilde factory patter'ini de kullanarak oluşturulacaktır. 

Son olarak api'den verileri çekip veritabanımıza kaydetmek için aşağıdaki komutu kullanmamız gerekiyor 
```
php artisan command:workDatas 
```

Bu işlemin ardından projemiz çalışmaya hazır halde olacak. Projeyi dilerseniz localhost aracılığıyla açabilir yada aşağıdaki komut ile proxy ile http://127.0.0.1:8000/ adresinde çalıştırabilirsiniz.
```
php artisan serve
```

Ana dizini açtığınızda sizi çalışma programı karşılayacaktır.

## Test Kodları
Çalışma programı fonksiyonu için hazırlamış olduğum test kodunu aşağıdaki komut ile çalıştırıp sonuçları kontrol edebilrisiniz
```
php artisan test
```

