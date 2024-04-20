import './bootstrap';


document.addEventListener('DOMContentLoaded', function () {
    const roleFieldset = document.querySelector('div[name="role"]');
    const userInfoDiv = document.querySelector('div[name="user-info"]');

    // Function to toggle visibility if a radio button is selected
    function toggleUserInfoVisibility() {
        if (document.querySelector('input[name="role_id"]:checked')) {
            const selectedRoleId = document.querySelector('input[name="role_id"]:checked');

            if (selectedRoleId) {
                userInfoDiv.classList.remove('hidden');
                roleFieldset.classList.add('hidden');
            } else {
                userInfoDiv.classList.add('hidden');
                roleFieldset.classList.remove('hidden');
            }
        }
    }

    // Event listener for radio button change
    roleFieldset.addEventListener('change', toggleUserInfoVisibility);

    // Initial check when the page loads
    toggleUserInfoVisibility();
});
