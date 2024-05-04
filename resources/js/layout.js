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

// Function to handle post form visibility
function togglePostForm() {
    const crudModalPost = document.getElementById('crud-modal-post');
    crudModalPost.classList.toggle('hidden');
    document.getElementsByTagName('body')[0].classList.toggle('overflow-hidden');
}
// Function to handle mobile sidenav visibility
function toggleSidenav(){
    const sidenav = document.getElementById('sidenav-states');
    sidenav.classList.toggle('hidden');
}



document.addEventListener('DOMContentLoaded', function () {
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


    // Function to manage post form additional fields visibility
    const postTypeField = document.getElementById('post-type-field');
    const postExtraInfo = document.getElementById('post-extra-info');
    if(postTypeField) {
        postTypeField.addEventListener('change', function() {
        switch (document.querySelector('input[name="post_type"]:checked').value) {
                case 'job request':
                    jobAdditionalInfo();
                    break;
                case 'job offer':
                    jobAdditionalInfo();
                    break;
                case 'service request':
                    serviceAdditionalInfo();
                    break;
                case 'service offer':
                    serviceAdditionalInfo();
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
            <label for="contract" class="block mb-2 text-sm font-medium text-gray-900">Contract</label>
            <select name="contract" id="contract" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="option">
                <option value="" disabled selected>Choose contract type</option>
                <option value="internship">internship</option>
                <option value="CDD">CDD</option>
                <option value="CDI">CDI</option>
            </select>
        </div>
        <div>
            <label for="job_type" class="block mb-2 text-sm font-medium text-gray-900">Job Type</label>
            <select name="job_type" id="job_type" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="option">
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
            <label for="study_level" class="block mb-2 text-sm font-medium text-gray-900">Level of study</label>
            <select name="study_level" id="study_level" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="option">
                <option value="" disabled selected>Choose level of study</option>
                <option value="Baccalaurate">Baccalaurate</option>
                <option value="Bac+2">Bac plus 2</option>
                <option value="Bac+3">Bac plus 3</option>
                <option value="Bac+4">Bac plus 4</option>
                <option value="Bac+5">Bac plus 5</option>
                <option value="Not important">Not important</option>
            </select>
        </div>
        `;
    }

    function serviceAdditionalInfo() {
        postExtraInfo.innerHTML = `
        <div>
            <label for="job_type" class="block mb-2 text-sm font-medium text-gray-900">Job Type</label>
            <input type="text" name="job_type" id="job_type" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="job type" value="freelance" disabled>
        </div>
        <div>
            <label for="" class="block mb-2 text-sm font-medium text-gray-900">Price MAD</label>
            <input type="number" name="price" id="price" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="0.00 MAD">
        </div>
        `;
    }

});


