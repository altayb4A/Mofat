@extends('layouts.app')

@section('title', 'Shipping Form')

@section('content')
 <head>


<style>
        .btn{
            background-color: #00165B !important;
            color: #fff !important;
            padding: 5px 10px !important;
            border-radius: 5px !important;
        }
        .btn:hover{
            color:#F9A332 !important;
        }
    </style>
 
    <style>
        .dropdown-menu {
    max-width: 100%;
}
  .btn:hover{
    color: #F9A332
  }

    </style>
    <style>
/* Hide the default checkbox appearance */
.form-check-input {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 20px;
    height: 20px;
    background-color: #ffffff; /* Default background */
    border: 2px solid #cccccc; /* Border for unselected checkbox */
    border-radius: 4px; /* Rounded corners */
    cursor: pointer;
    position: relative;
    margin-right: 10px;
}

/* When the checkbox is checked */
.form-check-input:checked {
    background-color: #00165B; /* Customize this color */
    border-color: ##F9A332; /* Optional: match border with the background */
}

/* Custom checkmark using ::after */
.form-check-input:checked::after {
    content: '✔'; /* Checkmark character */
    font-size: 16px;
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

/* Optional: Add hover effect */
.form-check-input:hover {
    border-color: #F9A332; /* Change border color on hover */
}
.form-check-label {
    vertical-align: middle;
}
</style>
<style>
/* Add basic styles for the selected items list */
.selected-items {
    margin-top: 10px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
}
.selected-items p {
    margin: 0;
    font-weight: bold;
}
.selected-items ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.selected-items ul li {
    margin: 5px 0;
    font-size: 14px;
}
</style>
 </head>
 <!-- start section -->
<section id="contact" class="ps-8 pe-8 lg-ps-4 lg-pe-4 md-ps-0 md-pe-0 py-10">
    <div class="container-fluid">
        <div
            class="row g-0 bg-very-light-gray justify-content-center border-radius-10px overflow-hidden flex-lg-row flex-column-reverse">
            <div class="col-lg-8 p-6 lg-p-50px xs-ps-30px xs-pe-30px">
                <span
                    class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Mofat
                    logistics services</span>
                <h2 class="fw-700 text-dark-gray ls-minus-1px mb-45px">Get a Moving Estimate!</h2>
                
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert fw-bold">
                    <p class="fw-bold">{{ session('success') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <!-- <p class="fs-16 lh-24 w-80 xxl-w-100" style="color: red;">*Rate shown is an estimate only, and may vary depending on item
                    type, handling requirements, value and other factors. We will contact you to confirm the final cost.
                </p> -->
                <!-- start shipping rate quote form -->

                <form method="POST" action="{{ route('shipping.estimate') }}" id="shippingForm" class="row contact-form-style-01">
                    @csrf
                    <!-- First Row -->
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-person"></i></span>
                            <input class="input-name box-shadow-double-large form-control required" type="text"
                                name="name" placeholder="Your name" value="{{ old('name') }}" required />
                        </div>
                        <div>
                            @error('name')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                            <input class="input-name box-shadow-double-large form-control required" type="text"
                                name="mobile" placeholder="Your mobile" value="{{ old('mobile') }}" required />
                        </div>
                        <div>
                            @error('mobile')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Second Row -->
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-envelope"></i></span>
                            <input class="box-shadow-double-large form-control" type="email" name="email"
                                placeholder="Your email" value="{{ old('email') }}"/>
                        </div>
                        <div>
                            @error('email')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-speedometer2"></i></span>
                            <input id="weight" class="box-shadow-double-large form-control required" type="number"
                                name="item_weight" min="1" max="1000" placeholder="Item Weight in kg"
                                value="{{ old('item_weight') }}" required />
                        </div>
                        <div>
                            @error('item_weight')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Third Row -->
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group select mb-20px">
                            <span class="form-icon"><i class="bi bi-flag"></i></span>
                            <select id="pickupCity" class="form-control box-shadow-double-large" name="pickup_location"
                                aria-label="select-city-pickup" required>
                                <option value="">Pickup Location (City)</option> 
                                <option value="Birmingham">Birmingham</option> 
                                <option value="Bristol">Bristol</option> 
                                <option value="Cambridge">Cambridge</option>
                                <option value="Cardiff">Cardiff</option> 
                                <option value="Coventry">Coventry</option> 
                                <option value="Derby">Derby</option>
                                <option value="Edinburgh">Edinburgh</option>
                                <option value="Glasgow">Glasgow</option> 
                                <option value="Leeds">Leeds</option>
                                <option value="Leicester">Leicester</option> 
                                <option value="Liverpool">Liverpool</option>
                                <option value="London">London</option> 
                                <option value="Manchester">Manchester</option>  
                                <option value="Newcastle">Newcastle upon Tyne </option>
                                <option value="Newbury">Newbury</option> 
                                <option value="Nottingham">Nottingham</option> 
                                <option value="Oxford">Oxford</option> 
                                <option value="Plymouth">Plymouth</option>
                                <option value="Portsmouth">Portsmouth</option> 
                                <option value="Sheffield">Sheffield</option> 
                                <option value="Southampton">Southampton</option> 
                                <option value="York">York</option>
                            </select>
                        </div>
                        <div>
                            @error('pickup_location')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group select mb-20px">
                            <span class="form-icon"><i class="bi bi-flag"></i></span>
                            <select id="deliveryCity" class="form-control box-shadow-double-large"
                                name="delivery_location" aria-label="select-city-delivery" required>
                                <option value="">Delivery Location</option>
                                <option value="Birmingham">Birmingham</option> 
                                <option value="Bristol">Bristol</option> 
                                <option value="Cambridge">Cambridge</option>
                                <option value="Cardiff">Cardiff</option> 
                                <option value="Coventry">Coventry</option> 
                                <option value="Derby">Derby</option>
                                <option value="Edinburgh">Edinburgh</option>
                                <option value="Glasgow">Glasgow</option> 
                                <option value="Leeds">Leeds</option>
                                <option value="Leicester">Leicester</option> 
                                <option value="Liverpool">Liverpool</option>
                                <option value="London">London</option> 
                                <option value="Manchester">Manchester</option>  
                                <option value="Newcastle">Newcastle upon Tyne </option>
                                <option value="Newbury">Newbury</option> 
                                <option value="Nottingham">Nottingham</option> 
                                <option value="Oxford">Oxford</option> 
                                <option value="Plymouth">Plymouth</option>
                                <option value="Portsmouth">Portsmouth</option> 
                                <option value="Sheffield">Sheffield</option> 
                                <option value="Southampton">Southampton</option> 
                                <option value="York">York</option>
                            </select>
                        </div>
                        <div>
                            @error('delivery_location')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Fourth Row -->
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group form-textarea">
                            <span class="form-icon"><i class="bi bi-globe2"></i></span>
                            <textarea class="box-shadow-double-large form-control" cols="40" rows="3"
                                name="pickup_address"
                                placeholder="Pickup Postcode" required>{{ old('pickup_address') }}</textarea>
                        </div>
                        <div>
                            @error('pickup_address')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group form-textarea">
                            <span class="form-icon"><i class="bi bi-globe"></i></span>
                            <textarea class="box-shadow-double-large form-control" cols="40" rows="3"
                                name="delivery_address"
                                placeholder="Delivery Postcode" required>{{ old('delivery_address') }}</textarea>
                        </div>
                        <div>
                            @error('delivery_address')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Full-Width Row for Additional Services -->

                        <div class="col-md-12 mb-30px">
                            <label for="additionalServices" class="fs-16 lh-24 w-80 xxl-w-100" class="fw-bold mb-2"> List of Items To Select From</label>
                            <div class="position-relative form-group">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle w-100" type="button" id="checkboxDropdown" data-bs-toggle="dropdown" style="background-color: #00165B; color: #ffffff;" aria-expanded="false">
                                        Select Items
                                    </button>
                                    <ul class="dropdown-menu p-3 w-100" aria-labelledby="checkboxDropdown" style="max-height: 300px; overflow-y: auto;" >
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="service1" value="Furniture">
                                                <label class="form-check-label" for="service1">Furniture: (Sofas, armchairs, tables, beds)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="service2" value="Appliances">
                                                <label class="form-check-label" for="service2">Appliances: (Washing machines, refrigerators, microwaves, ovens)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="service3" value="Mattresses">
                                                <label class="form-check-label" for="service3">Mattresses: (Mattresses, pillows, duvets )</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="service4" value="Clothing">
                                                <label class="form-check-label" for="service3">Clothing: (Packed in suitcases, boxes  )</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="service5" value="Kitchenware">
                                                <label class="form-check-label" for="service3">Kitchenware: (Cookware, dinnerware, and utensils )</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="service6" value="Office Furniture">
                                                <label class="form-check-label" for="service3">Office Furniture: (Desks, chairs, cabinets )</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="service8" value="IT Equipment">
                                                <label class="form-check-label" for="service3">IT Equipment: (Computers, monitors, printers )</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="service9" value="Musical Instruments">
                                                <label class="form-check-label" for="service4">Musical Instruments: (Pianos, guitars, violins )</label>
                                            </div>
                                        </li>
                                        <!-- Add remaining services here -->
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="service10" value="Moving Boxes">
                                                <label class="form-check-label" for="service20">Moving Boxes: (Packed boxes containing, goodshousehold  )</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                @error('services')
                                    <span class="text-danger fw-bold p-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div id="selectedItems" class="selected-items" style="display: none;">
                             <p class="fs-16 lh-24 w-80 xxl-w-100">Items You Selected:</p>
                             <ul></ul>
                        </div>

                    <!-- Full-Width Row for Description -->
                    <div class="col-md-12 mb-30px">
                        <div class="position-relative form-group form-textarea">
                            <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                            <textarea class="form-control" cols="40" rows="3" name="item_description"
                                placeholder="Describe Item(s) | Notes" required>{{ old('item_description') }}</textarea>
                        </div>
                        <div class="p-2">
                            @error('item_description')
                            <span class="text-danger fw-bold">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Full-Width Row for Delivery Cost -->
                    <div class="col-md-12 mb-30px">
                        <div class="position-relative form-group costs-value">
                            <span class="form-icon" style="color: white;"><i class="bi bi-cash"></i></span>
                            <input id="deliveryCost" class="input-name box-shadow-double-large form-control"
                                style="background: #00165B; color: #fff!important;" type="text" name="delivery_cost"
                                placeholder="Delivery Cost" value="{{ old('delivery_cost') }}" disabled />
                        </div>
                    </div>

                    <!-- Submit Button Row -->
                    <div class="col-auto text-center text-md-end sm-mt-20px lg-mb-15px">
                        <input type="hidden" name="redirect" value="">
                        <button
                            class="btn btn-base-color btn-switch-text btn-medium left-icon btn-round-edge submit btn-box-shadow"
                            type="submit">
                            <span>
                                <span><i class="feather icon-feather-mail"></i></span>
                                <span class="btn-double-text" data-text="Request a Quote">Request a Quote</span>
                            </span>
                        </button>
                    </div>

                    <!-- Note -->

                    <div class="col-xl-7 align-self-center last-paragraph-no-margin">
                        <p class="fs-16 lh-24 w-80 xxl-w-100"style="color: #F9A332;">*Rate shown is an estimate only, and may vary depending on
                            item type, handling requirements, value and other factors. When update it, we will contact you to confirm
                            the final cost.</p>
                    </div>

                    <div class="col-12">
                        <div class="form-results mt-20px d-none"></div>
                    </div>
                </form>
                <!-- end shipping rate quote form -->

            </div>
            <div class="col-lg-4 md-h-700px sm-h-500px">
                <div class="cover-background background-position-center-top h-100"
                    style="background-image: url('images/Mofat5.png');">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->


<script>
document.addEventListener('DOMContentLoaded', () => {
    const checkboxes = document.querySelectorAll('.form-check-input');
    const selectedItemsContainer = document.getElementById('selectedItems');
    const selectedItemsList = selectedItemsContainer.querySelector('ul');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            // Clear the list
            selectedItemsList.innerHTML = '';
            
            // Get all checked checkboxes
            const selected = Array.from(checkboxes)
                .filter(cb => cb.checked)
                .map(cb => cb.value);
            
            // Update the display
            if (selected.length > 0) {
                selectedItemsContainer.style.display = 'block';
                selected.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    selectedItemsList.appendChild(li);
                });
            } else {
                selectedItemsContainer.style.display = 'none';
            }
        });
    });
});
</script>
 
@endsection