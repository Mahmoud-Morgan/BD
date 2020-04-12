# Blood-Donation web app Project 

For recording the blood donor's info to contact when a patient is in need.

### Note

This web app builds as a prototype project.
PHP Laravel.

## App features
- Donor can input his information(Name-BloodType-Mobile No.-Email-Adress:(gov->city))
  and after submitting ,he will receive thanks mail to saving his info on the web site.

- Patient to get the proper donor according to (Adress:(gov->city)) and BloodType) has two options:

  1- can input his information (PatientName-Needed BloodType - Hospital Name - Mobile No.- Adress:(gov->city))
     and the will search in the donor's Database for the compatible donors, and send to them "Blood donate Request" mail
     attached with Patient info. 
     
  2- Make a direct search for the proper donor by filtering with (Adress:(gov->city)) and BloodType) and    
     the compatible donor's Phone numbers will displayed.


### Deploy link

Deployed on Heroku :
https://blood-donation-12.herokuapp.com/


Donors API : https://blood-donation-12.herokuapp.com/api/donorsapi


### Prerequisites

What things you need to install 

```
-Xampp
  
-Composer
```

### Installing


Project location , Terminal:
```
 composer install  
```

 Database :
```
import BloodDonation.sql to your Database 
```


edit your environment file according to Database & Mailtrap
```
env.
```

## Built With

* [Laravel](https://laravel.com/) - Laravel framework 





