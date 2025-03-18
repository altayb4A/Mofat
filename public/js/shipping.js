// Define a map of distances between locations (in km)
const stateDistances = {
    'Manchester': {
        'Bristol': 227,
        'Birmingham': 113,
        'Cambridge': 213,
        'Cardiff': 231,
        'Coventry': 128,
        'Derby': 80,
        'Edinburgh': 282,
        'Glasgow': 295,
        'Leeds': 57,
        'Leicester': 119,
        'Liverpool': 50,
        'London': 262,
        'Manchester': 0,
        'Newcastle': 171,
        'Newbury': 239,
        'Nottingham': 93,
        'Oxford': 203,
        'Plymouth': 360,
        'Portsmouth': 308,
        'Sheffield': 52,
        'Southampton': 284,
        'York': 96
    },
    'Birmingham': {
        'Bristol': 123,
        'Birmingham': 0,
        'Cambridge': 137,
        'Cardiff': 141,
        'Coventry': 28,
        'Derby': 57,
        'Edinburgh': 395,
        'Glasgow': 406,
        'Leeds': 148,
        'Leicester': 55,
        'Liverpool': 126,
        'London': 163,
        'Manchester': 113,
        'Newcastle': 278,
        'Newbury': 126,
        'Nottingham': 72,
        'Oxford': 92,
        'Plymouth': 254,
        'Portsmouth': 182,
        'Sheffield': 105,
        'Southampton': 174,
        'York': 158
    },
    'Bristol': {
        'Bristol': 0,
        'Birmingham': 123,
        'Cambridge': 220,
        'Cardiff': 70,
        'Coventry': 160,
        'Derby': 190,
        'Edinburgh': 500,
        'Glasgow': 510,
        'Leeds': 270,
        'Leicester': 180,
        'Liverpool': 220,
        'London': 190,
        'Manchester': 227,
        'Newcastle': 400,
        'Newbury': 100,
        'Nottingham': 190,
        'Oxford': 100,
        'Plymouth': 190,
        'Portsmouth': 170,
        'Sheffield': 120,
        'Southampton': 120,
        'York': 320
    },
    'Cardiff': {
        'Bristol': 70,
        'Birmingham': 170,
        'Cambridge': 270,
        'Cardiff': 0,
        'Coventry': 190,
        'Derby': 220,
        'Edinburgh': 610,
        'Glasgow': 590,
        'Leeds': 320,
        'Leicester': 220,
        'Liverpool': 260,
        'London': 240,
        'Manchester': 300,
        'Newcastle': 500,
        'Newbury': 150,
        'Nottingham': 250,
        'Oxford': 160,
        'Plymouth': 170,
        'Portsmouth': 210,
        'Sheffield': 290,
        'Southampton': 180,
        'York': 360
    },
    'Cambridge': {
        'Bristol': 225,
        'Birmingham': 145,
        'Cambridge': 0,
        'Cardiff': 240,
        'Coventry': 130,
        'Derby': 160,
        'Edinburgh': 470,
        'Glasgow': 500,
        'Leeds': 210,
        'Leicester': 120,
        'Liverpool': 260,
        'London': 79,
        'Manchester': 210,
        'Newcastle': 350,
        'Newbury': 160,
        'Nottingham': 130,
        'Oxford': 130,
        'Plymouth': 380,
        'Portsmouth': 210,
        'Sheffield': 190,
        'Southampton': 190,
        'York': 230
    },
    'Coventry': {
        'Birmingham': 28,
        'Bristol': 129,
        'Cambridge': 113,
        'Cardiff': 167,
        'Coventry': 0,
        'Derby': 57,
        'Edinburgh': 285,
        'Glasgow': 285,
        'Leeds': 155,
        'Leicester': 36,
        'Liverpool': 149,
        'London': 139,
        'Manchester': 129,
        'Newcastle': 285,
        'Newbury': 112,
        'Nottingham': 66,
        'Oxford': 75,
        'Plymouth': 291,
        'Portsmouth': 181,
        'Sheffield': 109,
        'Southampton': 167,
        'York': 175
    },
    'Derby': {
        'Birmingham': 58,
        'Bristol': 182,
        'Cambridge': 129,
        'Cardiff': 198,
        'Coventry': 66,
        'Derby': 0,
        'Edinburgh': 355,
        'Glasgow': 375,
        'Leeds': 97,
        'Leicester': 44,
        'Liverpool': 98,
        'London': 182,
        'Manchester': 80,
        'Newcastle': 217,
        'Newbury': 174,
        'Nottingham': 133,
        'Oxford': 75,
        'Plymouth': 314,
        'Portsmouth': 238,
        'Sheffield': 52,
        'Southampton': 204,
        'York': 112
    },
    'Edinburgh': {
        'Birmingham': 390,
        'Bristol': 502,
        'Cambridge': 475,
        'Cardiff': 612,
        'Coventry': 470,
        'Derby': 430,
        'Edinburgh': 0,
        'Glasgow': 74,
        'Leeds': 310,
        'Leicester': 450,
        'Liverpool': 355,
        'London': 665,
        'Manchester': 345,
        'Newcastle': 195,
        'Newbury': 600,
        'Nottingham': 450,
        'Oxford': 580,
        'Plymouth': 780,
        'Portsmouth': 725,
        'Sheffield': 400,
        'Southampton': 700,
        'York': 300
    },
    'Glasgow': {
        'Birmingham': 406,
        'Bristol': 502,
        'Cambridge': 474,
        'Cardiff': 492,
        'Coventry': 406,
        'Derby': 394,
        'Edinburgh': 74,
        'Glasgow': 0,
        'Leeds': 288,
        'Leicester': 402,
        'Liverpool': 285,
        'London': 555,
        'Manchester': 295,
        'Newcastle': 195,
        'Newbury': 554,
        'Nottingham': 402,
        'Oxford': 523,
        'Plymouth': 603,
        'Portsmouth': 592,
        'Sheffield': 351,
        'Southampton': 581,
        'York': 296
    },
    'Leeds': {
        'Birmingham': 160,
        'Bristol': 270,
        'Cambridge': 200,
        'Cardiff': 230,
        'Coventry': 180,
        'Derby': 60,
        'Edinburgh': 330,
        'Glasgow': 400,
        'Leeds': 0,
        'Leicester': 130,
        'Liverpool': 130,
        'London': 300,
        'Manchester': 55,
        'Newcastle': 130,
        'Newbury': 320,
        'Nottingham': 100,
        'Oxford': 260,
        'Plymouth': 380,
        'Portsmouth': 320,
        'Sheffield': 50,
        'Southampton': 300,
        'York': 40
    },
    'Leicester': {
        'Birmingham': 84,
        'Bristol': 207,
        'Cambridge': 122,
        'Cardiff': 260,
        'Coventry': 48,
        'Derby': 48,
        'Edinburgh': 432,
        'Glasgow': 432,
        'Leeds': 136,
        'Leicester': 0,
        'Liverpool': 193,
        'London': 112,
        'Manchester': 154,
        'Newcastle': 222,
        'Newbury': 193,
        'Nottingham': 90,
        'Oxford': 90,
        'Plymouth': 357,
        'Portsmouth': 193,
        'Sheffield': 136,
        'Southampton': 193,
        'York': 90
    },
    'Liverpool': {
        'Birmingham': 130,
        'Bristol': 180,
        'Cambridge': 230,
        'Cardiff': 210,
        'Coventry': 130,
        'Derby': 140,
        'Edinburgh': 330,
        'Glasgow': 320,
        'Leeds': 70,
        'Leicester': 180,
        'Liverpool': 0,
        'London': 330,
        'Manchester': 35,
        'Newcastle': 200,
        'Newbury': 300,
        'Nottingham': 160,
        'Oxford': 280,
        'Plymouth': 380,
        'Portsmouth': 320,
        'Sheffield': 130,
        'Southampton': 320,
        'York': 120
    },
    'London': {
        'Birmingham': 163,
        'Bristol': 180,
        'Cambridge': 80,
        'Cardiff': 240,
        'Coventry': 145,
        'Derby': 160,
        'Edinburgh': 330,
        'Glasgow': 400,
        'Leeds': 280,
        'Leicester': 160,
        'Liverpool': 330,
        'London': 0,
        'Manchester': 260,
        'Newcastle': 400,
        'Newbury': 60,
        'Nottingham': 200,
        'Oxford': 90,
        'Plymouth': 300,
        'Portsmouth': 120,
        'Sheffield': 230,
        'Southampton': 130,
        'York': 280
    },
    'Newcastle': {
        'Birmingham': 278,
        'Bristol': 397,
        'Cambridge': 329,
        'Cardiff': 403,
        'Coventry': 285,
        'Derby': 228,
        'Edinburgh': 148,
        'Glasgow': 195,
        'Leeds': 131,
        'Leicester': 262,
        'Liverpool': 195,
        'London': 398,
        'Manchester': 171,
        'Newcastle': 0,
        'Newbury': 400,
        'Nottingham': 227,
        'Oxford': 359,
        'Plymouth': 539,
        'Portsmouth': 465,
        'Sheffield': 177,
        'Southampton': 453,
        'York': 118
    },
    'Newbury': {
        'Birmingham': 160,
        'Bristol': 120,
        'Cambridge': 80,
        'Cardiff': 230,
        'Coventry': 140,
        'Derby': 160,
        'Edinburgh': 400,
        'Glasgow': 500,
        'Leeds': 300,
        'Leicester': 110,
        'Liverpool': 200,
        'London': 65,
        'Manchester': 250,
        'Newcastle': 400,
        'Newbury': 0,
        'Nottingham': 160,
        'Oxford': 35,
        'Plymouth': 190,
        'Portsmouth': 100,
        'Sheffield': 280,
        'Southampton': 80,
        'York': 320
    },
    'Nottingham': {
        'Birmingham': 35,
        'Bristol': 140,
        'Cambridge': 130,
        'Cardiff': 190,
        'Coventry': 50,
        'Derby': 25,
        'Edinburgh': 330,
        'Glasgow': 350,
        'Leeds': 80,
        'Leicester': 40,
        'Liverpool': 90,
        'London': 190,
        'Manchester': 80,
        'Newcastle': 160,
        'Newbury': 180,
        'Nottingham': 0,
        'Oxford': 150,
        'Plymouth': 280,
        'Portsmouth': 200,
        'Sheffield': 50,
        'Southampton': 210,
        'York': 100
    },
    'Oxford': {
        'Birmingham': 125,
        'Bristol': 140,
        'Cambridge': 90,
        'Cardiff': 170,
        'Coventry': 80,
        'Derby': 130,
        'Edinburgh': 400,
        'Glasgow': 410,
        'Leeds': 200,
        'Leicester': 50,
        'Liverpool': 230,
        'London': 90,
        'Manchester': 250,
        'Newcastle': 300,
        'Newbury': 30,
        'Nottingham': 180,
        'Oxford': 0,
        'Plymouth': 270,
        'Portsmouth': 100,
        'Sheffield': 190,
        'Southampton': 110,
        'York': 220
    },
    'Plymouth': {
        'Birmingham': 190,
        'Bristol': 190,
        'Cambridge': 280,
        'Cardiff': 110,
        'Coventry': 190,
        'Derby': 200,
        'Edinburgh': 400,
        'Glasgow': 400,
        'Leeds': 300,
        'Leicester': 180,
        'Liverpool': 270,
        'London': 300,
        'Manchester': 250,
        'Newcastle': 350,
        'Newbury': 240,
        'Nottingham': 230,
        'Oxford': 240,
        'Plymouth': 0,
        'Portsmouth': 160,
        'Sheffield': 220,
        'Southampton': 160,
        'York': 300
    },
    'Portsmouth': {
        'Birmingham': 195,
        'Bristol': 128,
        'Cambridge': 177,
        'Cardiff': 164,
        'Coventry': 190,
        'Derby': 200,
        'Edinburgh': 590,
        'Glasgow': 600,
        'Leeds': 335,
        'Leicester': 205,
        'Liverpool': 318,
        'London': 104,
        'Manchester': 309,
        'Newcastle': 460,
        'Newbury': 100,
        'Nottingham': 240,
        'Oxford': 106,
        'Plymouth': 150,
        'Portsmouth': 0,
        'Sheffield': 290,
        'Southampton': 30,
        'York': 320
    },
    'Sheffield': {
        'Birmingham': 110,
        'Bristol': 199,
        'Cambridge': 145,
        'Cardiff': 225,
        'Coventry': 120,
        'Derby': 45,
        'Edinburgh': 330,
        'Glasgow': 340,
        'Leeds': 55,
        'Leicester': 120,
        'Liverpool': 140,
        'London': 260,
        'Manchester': 60,
        'Newcastle': 190,
        'Newbury': 225,
        'Nottingham': 50,
        'Oxford': 190,
        'Plymouth': 340,
        'Portsmouth': 300,
        'Sheffield': 0,
        'Southampton': 290,
        'York': 80
    },
    'Southampton': {
        'Birmingham': 140,
        'Bristol': 115,
        'Cambridge': 140,
        'Cardiff': 220,
        'Coventry': 130,
        'Derby': 160,
        'Edinburgh': 330,
        'Glasgow': 350,
        'Leeds': 250,
        'Leicester': 140,
        'Liverpool': 260,
        'London': 110,
        'Manchester': 240,
        'Newcastle': 300,
        'Newbury': 30,
        'Nottingham': 180,
        'Oxford': 80,
        'Plymouth': 190,
        'Portsmouth': 35,
        'Sheffield': 210,
        'Southampton': 0,
        'York': 230
    },
    'York': {
        'Birmingham': 169,
        'Bristol': 324,
        'Cambridge': 221,
        'Cardiff': 319,
        'Coventry': 178,
        'Derby': 123,
        'Edinburgh': 322,
        'Glasgow': 410,
        'Leeds': 54,
        'Leicester': 146,
        'Liverpool': 220,
        'London': 291,
        'Manchester': 139,
        'Newcastle': 127,
        'Newbury': 127,
        'Nottingham': 77,
        'Oxford': 526,
        'Plymouth': 340,
        'Portsmouth': 77,
        'Sheffield': 359,
        'Southampton': 111,
        'York': 0
    },

};


// Base rate per km (in GBP)
const BASE_RATE_PER_KM = 2;

// Minimum charge for same-city delivery
const SAME_CITY_MINIMUM = 40;

// Weight categories and their multipliers
const weightMultipliers = [
    { maxWeight: 5, multiplier: 1 },
    { maxWeight: 10, multiplier: 1.5 },
    { maxWeight: 20, multiplier: 2 },
    { maxWeight: 50, multiplier: 3 },
    { maxWeight: Infinity, multiplier: 4 }
];

function calculateShippingCost(pickupCity, deliveryCity, weight) {
    let distance = 0;
    let baseCost = 0;

    if (pickupCity === deliveryCity) {
        baseCost = SAME_CITY_MINIMUM;
    } else {
        distance = stateDistances[pickupCity][deliveryCity] ||
            stateDistances[deliveryCity][pickupCity];

        if (!distance) {
            throw new Error("Distance not found for the given cities");
        }

        baseCost = distance * BASE_RATE_PER_KM;
    }

    const weightMultiplier = weightMultipliers.find(wm => weight <= wm.maxWeight).multiplier;

    const finalCost = baseCost * weightMultiplier;

    return Math.max(Math.round(finalCost), SAME_CITY_MINIMUM);
}

// Event listener for form inputs
document.addEventListener('DOMContentLoaded', function () {
    const pickupCitySelect = document.getElementById('pickupCity');
    const deliveryCitySelect = document.getElementById('deliveryCity');
    const weightInput = document.getElementById('weight');
    const costInput = document.getElementById('deliveryCost');
    const form = document.getElementById('shippingForm');

    function updateCost() {
        const pickupCity = pickupCitySelect.value;
        const deliveryCity = deliveryCitySelect.value;
        const weight = parseFloat(weightInput.value);

        if (pickupCity && deliveryCity && weight) {
            try {
                const cost = calculateShippingCost(pickupCity, deliveryCity, weight);
                costInput.value = `£${cost.toLocaleString()}`;
            } catch (error) {
                costInput.value = 'Error: ' + error.message;
            }
        } else {
            costInput.value = '';
        }
    }

    if (pickupCitySelect && deliveryCitySelect && weightInput) {
        pickupCitySelect.addEventListener('change', updateCost);
        deliveryCitySelect.addEventListener('change', updateCost);
        weightInput.addEventListener('input', updateCost);
    }
});

// Add this at the end of your existing code
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('shippingForm');
    const costInput = document.getElementById('deliveryCost');

    if (form) {
        form.addEventListener('submit', function (e) {
            // Enable the delivery_cost input so it's included in the form submission
            costInput.disabled = false;

            // Remove the '£' symbol and commas from the cost value
            costInput.value = costInput.value.replace('£', '').replace(/,/g, '');
        });
    }
});