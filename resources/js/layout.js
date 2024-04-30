// Function to handle profile dropdown mobile visibility
function toggleProfileDropdownMobile() {
    const profileDropdownMobile = document.getElementById('profile-dropdown-mobile');
    profileDropdownMobile.classList.toggle('hidden');
}

function removeLink(linkNum) {
    const linkToRemove = document.getElementById(`links[${linkNum}]`);

    if (linkToRemove) {
        linkToRemove.remove();
    }
}

function togglePostForm() {
    const crudModalPost = document.getElementById('crud-modal-post');
    crudModalPost.classList.toggle('hidden');
}



document.addEventListener('DOMContentLoaded', function () {
    const desktopSearchInput = document.querySelector('input[id="desktop-search"]');
    const mobileSearchInput = document.querySelector('input[id="mobile-search"]');
    // Function to handle search input changes
    function handleSearchInputChange(inputElement) {
        // Log the input value to the console
        console.log(inputElement.value);
        // Perform other search-related actions as needed
    }

    // Add event listeners for search input changes
    desktopSearchInput.addEventListener('input', function() {
        handleSearchInputChange(this);
    });

    mobileSearchInput.addEventListener('input', function() {
        handleSearchInputChange(this);
    });

    // Function to manage profile dropdown visibility
    const profileDropdownTrigger = document.getElementById('profile-dropdown-trigger');
    const profileDropdown = document.getElementById('profile-dropdown');

    function toggleProfileDropdown() {
        const isClosed = (profileDropdownTrigger.style.transform === 'rotate(0deg)' && profileDropdown.classList.contains('hidden'));
        profileDropdownTrigger.style.transform = isClosed ? 'rotate(180deg)' : 'rotate(0deg)';
        profileDropdown.classList.toggle('hidden', !isClosed);
    }

    // Add event listeners to manage profile dropdown visibility
    profileDropdownTrigger.addEventListener('click', toggleProfileDropdown);

    window.onclick = function(event) {
        if (!event.target.matches('#profile-dropdown-trigger')) {
            if (!profileDropdown.classList.contains('hidden')) {
                toggleProfileDropdown();
            }
        }
    }

    const mobileSearchContainer = document.getElementById('mobile-search');
    const mobileSearchTrigger = document.getElementById('mobile-search-trigger');
    const mobileSearchClose = document.getElementById('mobile-search-close');

    // Function to manage mobile search visibility
    function toggleMobileSearch() {
        mobileSearchContainer.classList.toggle('hidden');
        mobileSearchInput.value = '';
    }

    // Add event listeners to manage mobile search visibility
    mobileSearchTrigger.addEventListener('click', toggleMobileSearch);
    mobileSearchClose.addEventListener('click', toggleMobileSearch);

    // Function to manage post form additional fields visibility
    const postTypeField = document.getElementById('post-type-field');
    const postExtraInfo = document.getElementById('post-extra-info');
    if(postTypeField) {
        postTypeField.addEventListener('change', function() {
        switch (document.querySelector('input[name="post_type"]:checked').value) {
                case 'job request':
                    jobAdditionalInfo();
                    console.log('this is a job request');
                    break;
                case 'job offer':
                    jobAdditionalInfo();
                    console.log('this is a job offer');
                    break;
                case 'service request':
                    serviceAdditionalInfo();
                    console.log('this is a service request');
                    break;
                case 'service offer':
                    serviceAdditionalInfo();
                    console.log('this is a service offer');
                    break;
                default:
                    console.log('choice not found');
                    break;
            }
        });
    }

    function jobAdditionalInfo() {
        postExtraInfo.innerHTML = `
        <div>
            <p class="block mb-2 text-sm font-medium text-gray-900">Contract</p>
            <input class="hidden" type="text" name="section[0][key]" value="contract">
            <select name="section[0][value]" id="section[0][value]" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="option">
                <option value="" disabled selected>Choose contract type</option>
                <option value="internship">internship</option>
                <option value="CDD">CDD</option>
                <option value="CDI">CDI</option>
            </select>
        </div>
        <div>
            <p class="block mb-2 text-sm font-medium text-gray-900">Job Type</p>
            <input class="hidden" type="text" name="section[1][key]" value="job_type">
            <select name="section[1][value]" id="section[1][value]" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="option">
                <option value="" disabled selected>Choose job type</option>
                <option value="part time">Part time</option>
                <option value="full time">Full time</option>
                <option value="on site">On site</option>
                <option value="hybrid">Hybrid</option>
                <option value="remote">Remote</option>
                <option value="freelance">Freelance</option>
            </select>
        </div>
        <div>
            <p class="block mb-2 text-sm font-medium text-gray-900">Level of study</p>
            <input class="hidden" type="text" name="section[2][key]" value="study_level">
            <select name="section[2][value]" id="section[2][value]" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="option">
                <option value="" disabled selected>Choose level of study</option>
                <option value="Baccalaurate">Baccalaurate</option>
                <option value="Bac plus 2">Bac plus 2</option>
                <option value="Bac plus 3">Bac plus 3</option>
                <option value="Bac plus 4">Bac plus 4</option>
                <option value="Bac plus 5">Bac plus 5</option>
                <option value="Not important">Not important</option>
            </select>
        </div>
        `;
    }

    function serviceAdditionalInfo() {
        postExtraInfo.innerHTML = `
        <div>
            <p class="block mb-2 text-sm font-medium text-gray-900">Job Type</p>
            <input class="hidden" type="text" name="section[0][key]" value="job_type">
            <input type="text" name="section[0][value]" id="section[0][value]" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="job type" value="freelance" disabled>
        </div>
        <div>
            <p class="block mb-2 text-sm font-medium text-gray-900">Price MAD</p>
            <input class="hidden" type="text" name="section[1][key]" value="price">
            <input type="number" name="section[1][value]" id="section[1][value]" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="0.00 MAD">
        </div>
        `;
    }

});


