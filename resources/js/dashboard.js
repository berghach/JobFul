function addLink() {
    const linksContainer = document.getElementById('links-container');

    let linkCount = linksContainer.childElementCount;

    const linkDiv = document.createElement('div');
    linkDiv.setAttribute('id', `links[${linkCount}]`);
    linkDiv.setAttribute('class', 'inline-flex items-center gap-1');
    linkDiv.innerHTML = `
        <x-text-input id="links[${linkCount}][url]" type="text" name="links[${linkCount}][url]" class="block mt-1 w-full h-10 ps-3 border-gray-300 border-2 rounded-xl shadow-sm"  placeholder="Link ${linkCount + 1}"></x-text-input>
        <button type="button" onclick="removeLink(${linkCount})">
            <i class=" text-red-600" data-feather="minus-circle"></i>
        </button>
    `;
    linksContainer.appendChild(linkDiv);
    console.log(linkCount);
    feather.replace();
}
function removeLink(linkNum) {
const linkToRemove = document.getElementById(`links[${linkNum}]`);

if (linkToRemove) {
    linkToRemove.remove();
}
}