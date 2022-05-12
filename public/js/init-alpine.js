function data() {
  function getThemeFromLocalStorage() {
    // if user already changed the theme, use it
    if (window.localStorage.getItem('dark')) {
      return JSON.parse(window.localStorage.getItem('dark'))
    }

    // else return their preferences
    return (
      !!window.matchMedia &&
      window.matchMedia('(prefers-color-scheme: dark)').matches
    )
  }

  function setThemeToLocalStorage(value) {
    window.localStorage.setItem('dark', value)
  }

  return {
    dark: getThemeFromLocalStorage(),
    toggleTheme() {
      this.dark = !this.dark
      setThemeToLocalStorage(this.dark)
    },
    isSideMenuOpen: false,
    toggleSideMenu() {
      this.isSideMenuOpen = !this.isSideMenuOpen
    },
    isSideMenuOpenDesktop: true,
    toggleSideMenuDesktop() {
      this.isSideMenuOpenDesktop = !this.isSideMenuOpenDesktop
    },
    closeSideMenu() {
      this.isSideMenuOpen = false
    },
    closeSideMenuDesktop() {
      this.isSideMenuOpenDesktop = false
    },
  }
}
