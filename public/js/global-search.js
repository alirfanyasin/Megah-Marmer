// public/js/global-search.js

document.addEventListener('DOMContentLoaded', function() {
    // Desktop Search
    initSearch('global-search', 'search-list', 'search-dropdown', 'search-empty', 'search-spinner', 'search-clear');
    
    // Mobile Search
    initSearch('mobile-global-search', 'mobile-search-list', 'mobile-search-dropdown', 'mobile-search-empty', 'mobile-search-spinner');
});

function initSearch(inputId, listId, dropdownId, emptyId, spinnerId, clearId = null) {
    const input = document.getElementById(inputId);
    const list = document.getElementById(listId);
    const dropdown = document.getElementById(dropdownId);
    const empty = document.getElementById(emptyId);
    const spinner = document.getElementById(spinnerId);
    const clearBtn = clearId ? document.getElementById(clearId) : null;
    
    if (!input) return;

    const searchUrl = input.dataset.searchUrl;
    let debounceTimer;

    // Event listener untuk input
    input.addEventListener('input', function() {
        const query = this.value.trim();
        
        // Show/hide clear button
        if (clearBtn) {
            clearBtn.classList.toggle('hidden', query.length === 0);
        }

        // Reset jika kurang dari 2 karakter
        if (query.length < 2) {
            dropdown.classList.add('hidden');
            return;
        }

        // Debounce untuk mengurangi request
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            performSearch(query);
        }, 300); // 300ms delay
    });

    // Clear button handler
    if (clearBtn) {
        clearBtn.addEventListener('click', function() {
            input.value = '';
            input.focus();
            dropdown.classList.add('hidden');
            this.classList.add('hidden');
        });
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!input.contains(e.target) && !dropdown.contains(e.target)) {
            dropdown.classList.add('hidden');
        }
    });

    // Prevent form submission on Enter
    input.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
        }
    });

    function performSearch(query) {
        // Show spinner
        spinner.classList.remove('hidden');
        if (clearBtn) clearBtn.classList.add('hidden');
        
        fetch(`${searchUrl}?q=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(result => {
                spinner.classList.add('hidden');
                if (clearBtn && input.value.trim()) {
                    clearBtn.classList.remove('hidden');
                }
                
                const data = result.data || [];
                
                if (data.length === 0) {
                    list.innerHTML = '';
                    empty.classList.remove('hidden');
                } else {
                    empty.classList.add('hidden');
                    renderResults(data);
                }
                
                dropdown.classList.remove('hidden');
            })
            .catch(error => {
                console.error('Search error:', error);
                spinner.classList.add('hidden');
                list.innerHTML = '<li class="p-3 text-sm text-red-500">Error loading results</li>';
                dropdown.classList.remove('hidden');
            });
    }

    function renderResults(data) {
        list.innerHTML = '';
        
        data.forEach(item => {
            const li = document.createElement('li');
            li.className = 'hover:bg-gray-50 transition-colors cursor-pointer';
            
            const typeColors = {
                'location': 'text-blue-600',
                'product': 'text-green-600',
                'category': 'text-purple-600'
            };
            
            const iconColor = typeColors[item.type] || 'text-gray-600';
            
            li.innerHTML = `
                <a href="${item.url}" class="flex items-center gap-3 p-3">
                    <div class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-gray-100 rounded-lg">
                        <i class="fas ${item.icon} ${iconColor}"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate">${escapeHtml(item.name)}</p>
                        <p class="text-xs text-gray-500 truncate">${escapeHtml(item.subtitle)}</p>
                    </div>
                    <div class="flex-shrink-0">
                        <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                    </div>
                </a>
            `;
            
            list.appendChild(li);
        });
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
}