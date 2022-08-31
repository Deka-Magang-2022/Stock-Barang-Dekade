<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-kepala />
    <style type="text/tailwindcss">
        @layer utilities {
        .sidebar-expanded {
          @apply w-1/4 p-7;
        }
        .sidebar-hidden {
          @apply w-0 p-0;
        }
      }
   </style>
</head>
<body>
    <div class="p-5">
        <div class="flex flex-row-reverse">
            <div id="sidebar" class="flex h-screen bg-gray-500 overflow-hidden transition-all duration-300 sidebar-hidden">
                Sidebar
            </div>
            <div class="w-full text-end">
                <div>Header Bar</div>
                <main>
                    Main Content
                    <br />
                    <button id="toggle-sidebar" class="text-end ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.75 12.25h10.5m-10.5-4h10.5m-10.5-4h10.5" />
                      </svg>
                  </button>
                </main>
            </div>
        </div>
    </div>
</body>
<script>
    const button = document.getElementById('toggle-sidebar');
    const sidebar = document.getElementById('sidebar');
    button.addEventListener('click', () => {
        if (sidebar.classList.contains('sidebar-hidden')) {
            sidebar.classList.add('sidebar-expanded');
            sidebar.classList.remove('sidebar-hidden');
        } else {
            sidebar.classList.add('sidebar-hidden');
            sidebar.classList.remove('sidebar-expanded');
        }
    });

</script>
</html>
