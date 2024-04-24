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
});
