@extends('layouts.app')
@section('title', 'Flight')
@section('content')
     <main class="flight-main">
        <section class="flight-first-section">
            <div class="active-flight" id="flight-link1">
                <a  id="one-way" href="javascript:void(0)">
                    <h1 id="one-way">one-way</h1>
                </a>
            </div>
            <div id="flight-link2">
                <a id="round-trip" href="javascript:void(0)">
                    <h1>round-trip</h1>
                </a>
            </div>
            <div id="flight-link3">
                <a id="multi-city" href="javascript:void(0)">
                    <h1>multi-city</h1>
                </a>
            </div>
        </section>
        <section class="flight-card-border">
                <div class="flight-take-off">
                 <a id="search-link" href="javascript:void(0)">
                     <label for="from">from</label>
                     <div>
                         <svg class="flight-swap-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="user-select: auto;">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" style="user-select: auto;"></path>
                       </svg>
                         <input type="text" placeholder="flying from">
                     </div>

                     <svg class="flight-swap-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                    </svg>
                 </a>
                </div>

                <div class="flight-take-off">
                 <a id="search-link" href="javascript:void(0)">
                     <label for="to">to</label>
                     <div>
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 18 18" fill="none">
                             <path d="M1.875 14.625H16.125V16.125H1.875V14.625ZM14.505 12.2625C15.105 12.42 15.72 12.0675 15.885 11.4675C16.0425 10.8675 15.69 10.2525 15.09 10.0875L11.1075 9.0225L9.0375 2.2575L7.59 1.875V8.085L3.8625 7.0875L3.165 5.3475L2.0775 5.055V8.9325L14.505 12.2625Z" fill="#B61C1C"/>
                           </svg>
                         <input type="text" placeholder="flying to">
                     </div>
                 </a>
                </div>

                <div class="flight-take-off">
                    <label for="select date">select date</label>
                    <div>
                        <svg class="date-icon" xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                          </svg>
                          <input type="text" id="datePicker" placeholder="select trip date">
                    </div>
                </div>

                <section class="flight-div-grid">
                    <div class="flight-take-off">
                        <label for="travelers" class="under-side-bar-link1">travelers</label>
                        <div class="under-side-bar-link1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="under-side-bar-link1" width="20" height="20" viewBox="0 0 18 18" fill="none">
                                <path d="M9 9C10.6575 9 12 7.6575 12 6C12 4.3425 10.6575 3 9 3C7.3425 3 6 4.3425 6 6C6 7.6575 7.3425 9 9 9ZM9 10.5C6.9975 10.5 3 11.505 3 13.5V15H15V13.5C15 11.505 11.0025 10.5 9 10.5Z" fill="#B61C1C"/>
                              </svg>
                              <input type="text" class="under-side-bar-link1" placeholder="passenger">
                        </div>
                    </div>
                    <div class="flight-take-off">
                        <label for="preferred class" class="under-side-bar-link1" >preferred class</label>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="under-side-bar-link1" width="21" height="20" viewBox="0 0 19 18" fill="none">
                                <path d="M12.875 2.625H11.375C10.55 2.625 9.875 3.3 9.875 4.125V7.875C9.875 8.7 10.55 9.375 11.375 9.375H12.875C13.7 9.375 14.375 8.7 14.375 7.875V4.125C14.375 3.3 13.7 2.625 12.875 2.625ZM8 11.625H14.375V13.125H7.9925C7.3325 13.125 6.7475 12.69 6.5525 12.0525L4.625 5.625V2.625H6.125V5.625L8 11.625ZM6.875 13.875H14.375V15.375H6.875V13.875Z" fill="#B61C1C"/>
                              </svg>
                              <input type="text" class="under-side-bar-link1" placeholder="select class">
                        </div>
                    </div>
                </section>
        </section>
        <section>
            <button class="flight-button">search flights</button>
        </section>

        <!-- <section class="notification-section">
            <div>
                <h1>continue your search</h1>
                <a href="javascript:void(0)">clear all</a>
            </div>
            <main>
                <div>
                    <div>
                        <span>
                            <h1>lagos</h1>
                            <h1>(los)</h1>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="9" viewBox="0 0 20 9" fill="none">
                            <path d="M19.3536 4.85355C19.5488 4.65829 19.5488 4.34171 19.3536 4.14644L16.1716 0.964465C15.9763 0.769203 15.6597 0.769203 15.4645 0.964465C15.2692 1.15973 15.2692 1.47631 15.4645 1.67157L18.2929 4.5L15.4645 7.32843C15.2692 7.52369 15.2692 7.84027 15.4645 8.03553C15.6597 8.23079 15.9763 8.23079 16.1716 8.03553L19.3536 4.85355ZM4.37114e-08 5L19 5L19 4L-4.37114e-08 4L4.37114e-08 5Z" fill="black"/>
                        </svg>
                        <span>
                            <h1>london</h1>
                            <h1>(lod)</h1>
                        </span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.12 12L8 9.12L10.88 12L12 10.88L9.12 8L12 5.12L10.88 4L8 6.88L5.12 4L4 5.12L6.88 8L4 10.88L5.12 12ZM8 16C6.89333 16 5.85333 15.79 4.88 15.37C3.90667 14.95 3.06 14.38 2.34 13.66C1.62 12.94 1.05 12.0933 0.63 11.12C0.21 10.1467 0 9.10667 0 8C0 6.89333 0.21 5.85333 0.63 4.88C1.05 3.90667 1.62 3.06 2.34 2.34C3.06 1.62 3.90667 1.05 4.88 0.63C5.85333 0.21 6.89333 0 8 0C9.10667 0 10.1467 0.21 11.12 0.63C12.0933 1.05 12.94 1.62 13.66 2.34C14.38 3.06 14.95 3.90667 15.37 4.88C15.79 5.85333 16 6.89333 16 8C16 9.10667 15.79 10.1467 15.37 11.12C14.95 12.0933 14.38 12.94 13.66 13.66C12.94 14.38 12.0933 14.95 11.12 15.37C10.1467 15.79 9.10667 16 8 16ZM8 14.4C9.78667 14.4 11.3 13.78 12.54 12.54C13.78 11.3 14.4 9.78667 14.4 8C14.4 6.21333 13.78 4.7 12.54 3.46C11.3 2.22 9.78667 1.6 8 1.6C6.21333 1.6 4.7 2.22 3.46 3.46C2.22 4.7 1.6 6.21333 1.6 8C1.6 9.78667 2.22 11.3 3.46 12.54C4.7 13.78 6.21333 14.4 8 14.4Z" fill="#131313"/>
                    </svg>
                </div>
                <h3>nov 5</h3>
            </main>
        </section> -->

        <!-- side bar that pop up from under -->
        <section class="under-sideBar">
            <main class="main-under-sideBar">
               <div class="under-sideBar-first">
                <svg xmlns="http://www.w3.org/2000/svg" class="cancle-under-sideBar" width="26" height="26" viewBox="0 0 26 26" fill="none">
                    <path d="M1 1L25 25M1 25L25 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                  <h1>Passengers & Class</h1>
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 26 20" fill="none">
                    <path d="M1 10.9167L8.38462 18.25L25 1.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
               </div>
               <!-- break -->
               <div class="sideBar-passengers">
                 <h1>PASSENGERS</h1>
                 <section>
                     <main>
                         <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none">
                                <path d="M12 0C8.6875 0 6 2.6875 6 6C6 9.3125 8.6875 12 12 12C15.3125 12 18 9.3125 18 6C18 2.6875 15.3125 0 12 0ZM9 14C4.01562 14 0 18.0156 0 23V24C0 26.2188 1.78125 28 4 28H20C22.2188 28 24 26.2188 24 24V23C24 18.0156 19.9844 14 15 14H9Z" fill="#2E3436"/>
                              </svg>
                            <span>
                                <p>Adult</p>
                                <small>&gt;12 years</small>
                            </span>
                         </div>
                         <!-- break -->
                         <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none">
                                <path d="M12 0C8.6875 0 6 2.6875 6 6C6 9.3125 8.6875 12 12 12C15.3125 12 18 9.3125 18 6C18 2.6875 15.3125 0 12 0ZM9 14C4.01562 14 0 18.0156 0 23V24C0 26.2188 1.78125 28 4 28H20C22.2188 28 24 26.2188 24 24V23C24 18.0156 19.9844 14 15 14H9Z" fill="#2E3436"/>
                              </svg>
                            <span>
                                <p>Child</p>
                                <small>2-12 years</small>
                            </span>
                         </div>
                         <!-- break -->
                         <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none">
                                <path d="M12 0C8.6875 0 6 2.6875 6 6C6 9.3125 8.6875 12 12 12C15.3125 12 18 9.3125 18 6C18 2.6875 15.3125 0 12 0ZM9 14C4.01562 14 0 18.0156 0 23V24C0 26.2188 1.78125 28 4 28H20C22.2188 28 24 26.2188 24 24V23C24 18.0156 19.9844 14 15 14H9Z" fill="#2E3436"/>
                              </svg>
                            <span>
                                <p>Infant</p>
                                <small> &lt;2 years </small>
                            </span>
                         </div>
                     </main>
                     <main>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M16.6 13H9.4M25 13C25 19.6274 19.6274 25 13 25C6.37258 25 1 19.6274 1 13C1 6.37258 6.37258 1 13 1C19.6274 1 25 6.37258 25 13Z" stroke="#B2B2B2" stroke-width="2" stroke-linecap="round"/>
                              </svg>
                              <p>0</p>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12.8372 8.65116C12.8372 8.18879 12.4624 7.81395 12 7.81395C11.5376 7.81395 11.1628 8.18879 11.1628 8.65116V11.1628H8.65116C8.18879 11.1628 7.81395 11.5376 7.81395 12C7.81395 12.4624 8.18879 12.8372 8.65116 12.8372H11.1628V15.3488C11.1628 15.8112 11.5376 16.186 12 16.186C12.4624 16.186 12.8372 15.8112 12.8372 15.3488V12.8372H15.3488C15.8112 12.8372 16.186 12.4624 16.186 12C16.186 11.5376 15.8112 11.1628 15.3488 11.1628H12.8372V8.65116Z" fill="#131313"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37258 0 0 5.37258 0 12C0 18.6275 5.37258 24 12 24C18.6275 24 24 18.6275 24 12C24 5.37258 18.6275 0 12 0ZM1.67442 12C1.67442 6.29734 6.29734 1.67442 12 1.67442C17.7026 1.67442 22.3256 6.29734 22.3256 12C22.3256 17.7026 17.7026 22.3256 12 22.3256C6.29734 22.3256 1.67442 17.7026 1.67442 12Z" fill="#131313"/>
                              </svg>
                        </div>
                        <!-- break -->
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M16.6 13H9.4M25 13C25 19.6274 19.6274 25 13 25C6.37258 25 1 19.6274 1 13C1 6.37258 6.37258 1 13 1C19.6274 1 25 6.37258 25 13Z" stroke="#B2B2B2" stroke-width="2" stroke-linecap="round"/>
                              </svg>
                              <p>0</p>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12.8372 8.65116C12.8372 8.18879 12.4624 7.81395 12 7.81395C11.5376 7.81395 11.1628 8.18879 11.1628 8.65116V11.1628H8.65116C8.18879 11.1628 7.81395 11.5376 7.81395 12C7.81395 12.4624 8.18879 12.8372 8.65116 12.8372H11.1628V15.3488C11.1628 15.8112 11.5376 16.186 12 16.186C12.4624 16.186 12.8372 15.8112 12.8372 15.3488V12.8372H15.3488C15.8112 12.8372 16.186 12.4624 16.186 12C16.186 11.5376 15.8112 11.1628 15.3488 11.1628H12.8372V8.65116Z" fill="#131313"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37258 0 0 5.37258 0 12C0 18.6275 5.37258 24 12 24C18.6275 24 24 18.6275 24 12C24 5.37258 18.6275 0 12 0ZM1.67442 12C1.67442 6.29734 6.29734 1.67442 12 1.67442C17.7026 1.67442 22.3256 6.29734 22.3256 12C22.3256 17.7026 17.7026 22.3256 12 22.3256C6.29734 22.3256 1.67442 17.7026 1.67442 12Z" fill="#131313"/>
                              </svg>
                        </div>
                        <!-- break -->
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M16.6 13H9.4M25 13C25 19.6274 19.6274 25 13 25C6.37258 25 1 19.6274 1 13C1 6.37258 6.37258 1 13 1C19.6274 1 25 6.37258 25 13Z" stroke="#B2B2B2" stroke-width="2" stroke-linecap="round"/>
                              </svg>
                              <p>0</p>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12.8372 8.65116C12.8372 8.18879 12.4624 7.81395 12 7.81395C11.5376 7.81395 11.1628 8.18879 11.1628 8.65116V11.1628H8.65116C8.18879 11.1628 7.81395 11.5376 7.81395 12C7.81395 12.4624 8.18879 12.8372 8.65116 12.8372H11.1628V15.3488C11.1628 15.8112 11.5376 16.186 12 16.186C12.4624 16.186 12.8372 15.8112 12.8372 15.3488V12.8372H15.3488C15.8112 12.8372 16.186 12.4624 16.186 12C16.186 11.5376 15.8112 11.1628 15.3488 11.1628H12.8372V8.65116Z" fill="#131313"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37258 0 0 5.37258 0 12C0 18.6275 5.37258 24 12 24C18.6275 24 24 18.6275 24 12C24 5.37258 18.6275 0 12 0ZM1.67442 12C1.67442 6.29734 6.29734 1.67442 12 1.67442C17.7026 1.67442 22.3256 6.29734 22.3256 12C22.3256 17.7026 17.7026 22.3256 12 22.3256C6.29734 22.3256 1.67442 17.7026 1.67442 12Z" fill="#131313"/>
                              </svg>
                        </div>
                     </main>
                 </section>
               </div>
               <!-- break -->
                <div class="cabin-class-section">
                    <h1>CABIN CLASS</h1>

                    <section>
                        <h1 class="testing1">Economy</h1>
                        <h1 class="testing2">Premium Economy</h1>
                        <h1 class="testing3">Business class</h1>
                        <h1 class="testing4">First class</h1>
                    </section>
                </div>
            </main>
         </section>
    </main>

@endsection
