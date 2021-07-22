// ————————————————————————————————————————————————————————————————————————————————
// Dropdowns in sidebar
// ————————————————————————————————————————————————————————————————————————————————
Array.from(document.querySelectorAll('[data-toggle=sidebardropdown]')).forEach(el => {
	el.onclick = function(e) {
		e.preventDefault()

		var dropdownMenuWrapper = e.target.nextElementSibling
		var is_open = dropdownMenuWrapper.classList.contains('open')
		if (is_open) {
			dropdownMenuWrapper.classList.remove('open')
		} else {
			Array.from(document.querySelectorAll('.diia-dropdown-menu.open')).forEach(el => el.classList.remove('open'))
			dropdownMenuWrapper.classList.add('open')
		}
	}
})


// ————————————————————————————————————————————————————————————————————————————————
// Initial actions
// ————————————————————————————————————————————————————————————————————————————————
docReady(() => {
	// Mobile menu
	document.querySelectorAll('.navbar-collapse').forEach(el => el.onclick = e => {
		if (!e.target.classList.contains('dropdown-toggle')) el.classList.toggle('show')
	})

	// Dropdown menu
	document.querySelectorAll('.dropdown-toggle').forEach(el => {
		el.onclick = e => {
			e.preventDefault()
			var ddmenu = e.target.closest('.sidebar-dropdown').querySelector('.sidebar-dropdown-menu')
			ddmenu.classList.toggle('open')
		}
	})
})


// ————————————————————————————————————————————————————————————————————————————————
// Panel triggering
// ————————————————————————————————————————————————————————————————————————————————
document.getElementById('aside-menu-toggler').onclick = e => document.getElementById('aside-panel').classList.toggle('open')
document.getElementById('sidebar-toggler').onclick = e => document.getElementById('sidebar').classList.toggle('changed')
document.getElementById('sidebar-minifier').onclick = e => document.getElementById('sidebar').classList.toggle('minified')