{{-- This partial is to add the necessary functionality to switch between themes, it is not added in a separate js file to reduce flickering on page load. --}}
<script>
  window.toDarkTheme=function() {
    document.documentElement.classList.add('dark');
    localStorage.setItem('color-theme', 'dark');
  };

  window.toLightTheme=function() {
    document.documentElement.classList.remove('dark');
    localStorage.setItem('color-theme', 'light');
  };

  if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    window.toDarkTheme();
  } else {
    window.toLightTheme();
  }
</script>