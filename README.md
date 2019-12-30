# Blood-Donation web app Project 

For recording blood donor's info to contact when a patient is in need.

### Note

This web app build as a prototype project.
PHP Laravel.

## App features.
- Donor can input his information(Name-BloodType-Mobile No.-Email-Adress:(gov->city))
  and after submiting ,he will recive thank's mail to saving his info on the wep site.

- Patient to get the proper donor according to (Adress:(gov->city)) and BloodType) has two options:

  1- can input his information (PatientName-Needed BloodType - Hospital Name - Mobile No.- Adress:(gov->city))
     and the will search in donor's Database for the compatible donors, and send to them "Blood donate Request" mail
     attatched with Patient info. 
     
  2- Make a direct search for the proper donor by filtering with (Adress:(gov->city)) and BloodType) and    
     the compatible donors Phone number's will displayed.



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


edite your environment file according to Database & Mailtrap
```
env.
```





## Built With

* [Laravel](https://laravel.com/) - The web framework used
* [git](https://git-scm.com/) - Version Control System




