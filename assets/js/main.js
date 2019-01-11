/*
 * Sidebar
 */

.sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    z - index: 100; /* Behind the navbar */
    padding: 48 px 0 0; /* Height of navbar */
    box - shadow: inset - 1 px 0 0 rgba(0, 0, 0, .1);
}

.sidebar - sticky {
    position: relative;
    top: 0;
    height: calc(100 vh - 48 px);
    padding - top: .5 rem;
    overflow - x: hidden;
    overflow - y: auto; /* Scrollable contents if viewport is shorter than content. */
}

@supports((position: -webkit - sticky) or(position: sticky)) {
        .sidebar - sticky {
            position: -webkit - sticky;
            position: sticky;
        }
    }

    .sidebar.nav - link {
        font - weight: 500;
        color: #333;

}



.sidebar .nav-link .feather {

  margin-right: 4px;

  color: # 999;
    }

    .sidebar.nav - link.active {
        color: #007bff;

}



.sidebar .nav-link:hover .feather,

.sidebar .nav-link.active .feather {

  color: inherit;

}



.sidebar-heading {

  font-size: .75rem;

  text-transform: uppercase;

}