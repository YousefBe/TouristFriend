<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class UpdateProfile extends Component
{

    public $countries = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People s Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, Peoples Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"];

    public $user;
    public $name;
    public $email;
    public $password;
    public $passwordConfirm;
    public $first_name;
    public $last_name;
    public $image;
    public $current_image;
    public $about;
    public $country;
    public $city;
    public $age;
    public $postsCount;
    public $commentsCount;
    use WithFileUploads;

    public function mount(User $user)
    {

        $this->name = $user->name;
        $this->email = $user->email;
        if ($user->details) {
            $this->first_name = $user->details->first_name;
            $this->last_name = $user->details->last_name;
            $this->current_image = $user->details->image;
            $this->about = $user->details->about;
            $this->country = $user->details->country;
            $this->city = $user->details->city;
            $this->age = $user->details->age;
        }
        $this->postsCount = $user->posts()->count();
        $this->commentsCount = $user->comments()->count();
    }


    public function saveMainDetails()
    {
        // to stop function from working every time i press savec
        // bad approach i guess 
        if (!$this->password && $this->user->name === $this->name && $this->email === $this->user->email) {
            return;
        }

        $this->validate([
            'name' => 'required',
            'email' => 'email|required',
        ]);


        if ($this->password == '') {
            $data = ['name' => $this->name, 'email' =>  $this->email];
        } else {
            if ($this->password  === $this->passwordConfirm) {
                $this->password = bcrypt($this->password);
            } else {
                $this->addError('password', 'password confirmation doesn\'t match');
                return;
            }
            $data = ['name' => $this->name, 'email' =>  $this->email,  'password' =>  $this->password];
        }
        $this->user->update($data);
        $this->emit('profile-updated');
        return redirect()->route('dashboard');
    }


    public function saveAddtionalDetails()
    {
        // to stop function from working every time i press savec
        // bad approach i guess 
        if (
            $this->user->details &&
            !$this->image &&
            $this->first_name === $this->user->details->first_name &&
            $this->last_name === $this->user->details->last_name &&
            $this->about === $this->user->details->about &&
            $this->country === $this->user->details->country &&
            $this->city === $this->user->details->city &&
            $this->age === $this->user->details->age
        ) {
            return;
        }

        $data = $this->validate([
            'first_name' =>  'required|min:3',
            'last_name' =>  'required|min:3',
            'image' =>  'sometimes',
            'country' => 'sometimes',
            'city' => 'required',
            'about' => 'sometimes',
            'age' => 'integer|required',
        ]);
        // if user provided no image but he already have an image
        if (!$this->image && $this->current_image) {
            $data['image'] =  $this->current_image;
            // if user provided no image
        } else if ($data['image'] === null) {
            $data['image'] = 'default.jpg';
        } else {
            // if user provided an image 
            $data['image'] = $this->image->hashName();
            $this->image->store('public/Users');
            $this->reset('image');
        }

        if (!$this->user->details) {
            $this->user->details()->create($data);
        } else {
            $this->user->details()->update($data);
        }
        $this->emit('profile-updated');
    }



    public function render()
    {
        return view('livewire.user.update-profile');
    }
}
