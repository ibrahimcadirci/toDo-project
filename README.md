# Work Plan Project
## Yazılım Hakkında

### Görev:
Picqer API ve Laravel framework kullanarak aşağıdaki özellikleri içeren web uygulaması geliştirin:
1. Picqer API'sinden tüm ürün verilerini alın ve verileri benzer bir modelle yerel bir mysql veritabanında
saklayın.
2. Picqer API'sinden Getirilen Ürünler için CRUD (Oluştur, Oku, Güncelle ve Sil) işlevi oluşturun. (Yerel
veritabanındaki değişiklikler API'ye yansıtılmalıdır)
3. Kullanıcı arayüzü aracılığıyla ürün stok değerini güncelleme işlevi oluşturun.

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

Ardından Test kodlarını çalıştırmak için aşağıdaki komutu çalıştırabilirsiniz.
```
php artisan test 
```

Son olarak api'den verileri çekip veritabanımıza kaydetmek için aşağıdaki komutu kullanmamız gerekiyor 
```
php artisan product:create
php artisan warehouses:create
```

Bu işlemin ardından projemiz çalışmaya hazır halde olacak. Projeyi dilerseniz localhost aracılığıyla açabilir yada aşağıdaki komut ile http://127.0.0.1:8000/ adresinde çalıştırabilirsiniz.
```
php artisan serve
```

Ana dizini açtığınızda sizi ürünler listesli karşılayacaktır.



