
<?php
session_start();
include 'fonksiyonlar/helper.php';

//Kullanıcıları dbsiz oldğuğu için k.adı ve passswordları bir array listesinde tutuldu
$user =[
    'yunusemresalcan' => [
        'eposta'=> 'yunus@gmail.com',
       'password' =>'123456',],
    'salcan' => [
        'eposta'=> 'salcan@gmail.com',
        'password' =>'123',],
];

//array listte tutulan bilgilerin eşleşmesi ve kontrollerinin sağlanması
if (get('islem') == "giris") {
    //Kullanıcıdan gelen bilgileri kayıt etme //
    $_SESSION['username'] = post('username');
    $_SESSION['password'] = post('password');

    if (!post('username')) {
        $_SESSION['error'] = 'kullanıcı adını giriniz';
        header('Location:login.php');
        exit();
    } elseif (!post('password')) {
        $_SESSION['error'] = 'kullanıcı şifreni giriniz';
        header('Location:login.php');
        exit();
    }else{
        if (array_key_exists(post('username'),$user)) {
            if ($user[post('username')]['password'] == post('password')){
                $_SESSION['login']=true;
                $_SESSION['kullanici_adi']= post('username');
                $_SESSION['eposta']=$user[post('username')]['eposta'];
                header('Location:index.php');
                exit();

            }else{
                $_SESSION['error'] = 'K.adı girişi yapılmadı ';
                header('Location:login.php');
                exit();
            }
        }else{
            $_SESSION['error'] = 'K.adı girişi olmadı ';
            header('Location:login.php');
            exit();
        }
    }

}
//index.php de görünen hakkımda yazısının alınması ve kayıt edilip edilmediğinin kontorlü
if (get('islem') == 'hakkimda'){
    $hakkimda= post('hakkimda');
 $islem = file_put_contents('db/'.session('kullanici_adi').'.txt',htmlspecialchars($hakkimda));
  if ($islem){
      header('Location:index.php?islem=true');
  }else header('Location:index.php?islem=false');
}
//oturum kapatma kontrolü
if (get('islem' )== 'cikis'){
    session_destroy();
    session_start();
    $_SESSION['error']='oturum sonlandırıldı!';
    header('Location:login.php');


}

// dark veya light mod alma kontrolü
if (get('islem')== 'renk'){
    setcookie('color',get('color'),time() +86400);
    header('Location:'.$_SERVER['HTTP_REFERER'] ?? 'index.php');
}