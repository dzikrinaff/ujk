@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-8 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                <p class="mb-4">
                  You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                  your profile.
                </p>

                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img
                  src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}"
                  height="140"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img
                      src="{{asset('assets/img/icons/unicons/chart-success.png')}}"
                      alt="chart success"
                      class="rounded"
                    />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt3"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                      <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Profit</span>
                <h3 class="card-title mb-2">$12,628</h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img
                      src="{{asset('assets/img/icons/unicons/wallet-info.png')}}"
                      alt="Credit Card"
                      class="rounded"
                    />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt6"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                      <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                  </div>
                </div>
                <span>Sales</span>
                <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Total Revenue -->
      <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
        <div class="card">
          <div class="row row-bordered g-0">
            <div class="col-md-8">
              <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
              <div id="totalRevenueChart" class="px-2"></div>
            </div>
            <div class="col-md-4">
              <div class="card-body">
                <div class="text-center">
                  <div class="dropdown">
                    <button
                      class="btn btn-sm btn-outline-primary dropdown-toggle"
                      type="button"
                      id="growthReportId"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      2022
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                      <a class="dropdown-item" href="javascript:void(0);">2021</a>
                      <a class="dropdown-item" href="javascript:void(0);">2020</a>
                      <a class="dropdown-item" href="javascript:void(0);">2019</a>
                    </div>
                  </div>
                </div>
              </div>
              <div id="growthChart"></div>
              <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

              <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                <div class="d-flex">
                  <div class="me-2">
                    <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                  </div>
                  <div class="d-flex flex-column">
                    <small>2022</small>
                    <h6 class="mb-0">$32.5k</h6>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="me-2">
                    <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                  </div>
                  <div class="d-flex flex-column">
                    <small>2021</small>
                    <h6 class="mb-0">$41.2k</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Total Revenue -->
      <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
        <div class="row">
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="{{asset(' assets/img/icons/unicons/paypal.png')}}" alt="Credit Card" class="rounded" />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt4"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                      <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                  </div>
                </div>
                <span class="d-block mb-1">Payments</span>
                <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
              </div>
            </div>
          </div>
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="{{asset(' assets/img/icons/unicons/cc-primary.png')}}" alt="Credit Card" class="rounded" />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt1"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                      <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Transactions</span>
                <h3 class="card-title mb-2">$14,857</h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
              </div>
            </div>
          </div>
          <!-- </div>
          <div class="row"> -->
          <div class="col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                  <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                    <div class="card-title">
                      <h5 class="text-nowrap mb-2">Profile Report</h5>
                      <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                    </div>
                    <div class="mt-sm-auto">
                      <small class="text-success text-nowrap fw-semibold"
                        ><i class="bx bx-chevron-up"></i> 68.2%</small
                      >
                      <h3 class="mb-0">$84,686k</h3>
                    </div>
                  </div>
                  <div id="profileReportChart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Order Statistics -->
      <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between pb-0">
            <div class="card-title mb-0">
              <h5 class="m-0 me-2">Order Statistics</h5>
              <small class="text-muted">42.82k Total Sales</small>
            </div>
            <div class="dropdown">
              <button
                class="btn p-0"
                type="button"
                id="orederStatistics"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="d-flex flex-column align-items-center gap-1">
                <h2 class="mb-2">8,258</h2>
                <span>Total Orders</span>
              </div>
              <div id="orderStatisticsChart"></div>
            </div>
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-primary"
                    ><i class="bx bx-mobile-alt"></i
                  ></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Electronic</h6>
                    <small class="text-muted">Mobile, Earbuds, TV</small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">82.5k</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Fashion</h6>
                    <small class="text-muted">T-shirt, Jeans, Shoes</small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">23.8k</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Decor</h6>
                    <small class="text-muted">Fine Art, Dining</small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">849k</small>
                  </div>
                </div>
              </li>
              <li class="d-flex">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-secondary"
                    ><i class="bx bx-football"></i
                  ></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Sports</h6>
                    <small class="text-muted">Football, Cricket Kit</small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">99</small>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Order Statistics -->

      <!-- Expense Overview -->
      <div class="col-md-6 col-lg-4 order-1 mb-4">
        <div class="card h-100">
          <div class="card-header">
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item">
                <button
                  type="button"
                  class="nav-link active"
                  role="tab"
                  data-bs-toggle="tab"
                  data-bs-target="#navs-tabs-line-card-income"
                  aria-controls="navs-tabs-line-card-income"
                  aria-selected="true"
                >
                  Income
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab">Expenses</button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab">Profit</button>
              </li>
            </ul>
          </div>
          <div class="card-body px-0">
            <div class="tab-content p-0">
              <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                <div class="d-flex p-4 pt-3">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="{{asset(' assets/img/icons/unicons/wallet.png')}}" alt="User" />
                  </div>
                  <div>
                    <small class="text-muted d-block">Total Balance</small>
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-1">$459.10</h6>
                      <small class="text-success fw-semibold">
                        <i class="bx bx-chevron-up"></i>
                        42.9%
                      </small>
                    </div>
                  </div>
                </div>
                <div id="incomeChart"></div>
                <div class="d-flex justify-content-center pt-4 gap-2">
                  <div class="flex-shrink-0">
                    <div id="expensesOfWeek"></div>
                  </div>
                  <div>
                    <p class="mb-n1 mt-1">Expenses This Week</p>
                    <small class="text-muted">$39 less than last week</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Expense Overview -->

      <!-- Transactions -->
      <div class="col-md-6 col-lg-4 order-2 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Transactions</h5>
            <div class="dropdown">
              <button
                class="btn p-0"
                type="button"
                id="transactionID"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" alt="User" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">Paypal</small>
                    <h6 class="mb-0">Send money</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0">+82.6</h6>
                    <span class="text-muted">USD</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">Wallet</small>
                    <h6 class="mb-0">Mac'D</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0">+270.69</h6>
                    <span class="text-muted">USD</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{asset('assets/img/icons/unicons/chart.png')}}" alt="User" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">Transfer</small>
                    <h6 class="mb-0">Refund</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0">+637.91</h6>
                    <span class="text-muted">USD</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{asset('assets/img/icons/unicons/cc-success.png')}}" alt="User" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">Credit Card</small>
                    <h6 class="mb-0">Ordered Food</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0">-838.71</h6>
                    <span class="text-muted">USD</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">Wallet</small>
                    <h6 class="mb-0">Starbucks</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0">+203.33</h6>
                    <span class="text-muted">USD</span>
                  </div>
                </div>
              </li>
              <li class="d-flex">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{asset('assets/img/icons/unicons/cc-warning.png')}}" alt="User" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">Mastercard</small>
                    <h6 class="mb-0">Ordered Food</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <h6 class="mb-0">-92.45</h6>
                    <span class="text-muted">USD</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Transactions -->
    </div>
  </div>
    <div class="row gy-6">
      <!-- Congratulations card -->
      <div class="col-md-12 col-lg-4">
        <div class="card">
          <div class="card-body text-nowrap">
            <h5 class="card-title mb-0 flex-wrap text-nowrap">Congratulations Norris! 🎉</h5>
            <p class="mb-2">Best seller of the month</p>
            <h4 class="text-primary mb-0">$42.8k</h4>
            <p class="mb-2">78% of target 🚀</p>
            <a href="javascript:;" class="btn btn-sm btn-primary">View Sales</a>
          </div>
          <img
            src="{{ asset ('assets/img/illustrations/trophy.png')}}"
            class="position-absolute bottom-0 end-0 me-5 mb-5"
            width="83"
            alt="view sales" />
        </div>
      </div>
      <!--/ Congratulations card -->

      <!-- Transactions -->
      <div class="col-lg-8">
        <div class="card h-100">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <h5 class="card-title m-0 me-2">Transactions</h5>
              <div class="dropdown">
                <button
                  class="btn text-muted p-0"
                  type="button"
                  id="transactionID"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false">
                  <i class="ri-more-2-line ri-24px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                  <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                  <a class="dropdown-item" href="javascript:void(0);">Share</a>
                  <a class="dropdown-item" href="javascript:void(0);">Update</a>
                </div>
              </div>
            </div>
            <p class="small mb-0"><span class="h6 mb-0">Total 48.5% Growth</span> 😎 this month</p>
          </div>
          <div class="card-body pt-lg-10">
            <div class="row g-6">
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-primary rounded shadow-xs">
                      <i class="ri-pie-chart-2-line ri-24px"></i>
                    </div>
                  </div>
                  <div class="ms-3">
                    <p class="mb-0">Sales</p>
                    <h5 class="mb-0">245k</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-success rounded shadow-xs">
                      <i class="ri-group-line ri-24px"></i>
                    </div>
                  </div>
                  <div class="ms-3">
                    <p class="mb-0">Customers</p>
                    <h5 class="mb-0">12.5k</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-warning rounded shadow-xs">
                      <i class="ri-macbook-line ri-24px"></i>
                    </div>
                  </div>
                  <div class="ms-3">
                    <p class="mb-0">Product</p>
                    <h5 class="mb-0">1.54k</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-info rounded shadow-xs">
                      <i class="ri-money-dollar-circle-line ri-24px"></i>
                    </div>
                  </div>
                  <div class="ms-3">
                    <p class="mb-0">Revenue</p>
                    <h5 class="mb-0">$88k</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Transactions -->

      <!-- Weekly Overview Chart -->
      <div class="col-xl-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <h5 class="mb-1">Weekly Overview</h5>
              <div class="dropdown">
                <button
                  class="btn text-muted p-0"
                  type="button"
                  id="weeklyOverviewDropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false">
                  <i class="ri-more-2-line ri-24px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklyOverviewDropdown">
                  <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                  <a class="dropdown-item" href="javascript:void(0);">Share</a>
                  <a class="dropdown-item" href="javascript:void(0);">Update</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body pt-lg-2">
            <div id="weeklyOverviewChart"></div>
            <div class="mt-1 mt-md-3">
              <div class="d-flex align-items-center gap-4">
                <h4 class="mb-0">45%</h4>
                <p class="mb-0">Your sales performance is 45% 😎 better compared to last month</p>
              </div>
              <div class="d-grid mt-3 mt-md-4">
                <button class="btn btn-primary" type="button">Details</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Weekly Overview Chart -->

      <!-- Total Earnings -->
      <div class="col-xl-4 col-md-6">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Total Earning</h5>
            <div class="dropdown">
              <button
                class="btn text-muted p-0"
                type="button"
                id="totalEarnings"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="ri-more-2-line ri-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
          <div class="card-body pt-lg-8">
            <div class="mb-5 mb-lg-12">
              <div class="d-flex align-items-center">
                <h3 class="mb-0">$24,895</h3>
                <span class="text-success ms-2">
                  <i class="ri-arrow-up-s-line"></i>
                  <span>10%</span>
                </span>
              </div>
              <p class="mb-0">Compared to $84,325 last year</p>
            </div>
            <ul class="p-0 m-0">
              <li class="d-flex mb-6">
                <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                  <img src="{{ asset ('assets/img/icons/misc/zipcar.png')}}" alt="zipcar" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Zipcar</h6>
                    <p class="mb-0">Vuejs, React & HTML</p>
                  </div>
                  <div>
                    <h6 class="mb-2">$24,895.65</h6>
                    <div class="progress bg-label-primary" style="height: 4px">
                      <div
                        class="progress-bar bg-primary"
                        style="width: 75%"
                        role="progressbar"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-6">
                <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                  <img src="{{ asset ('assets/img/icons/misc/bitbank.png')}}" alt="bitbank" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Bitbank</h6>
                    <p class="mb-0">Sketch, Figma & XD</p>
                  </div>
                  <div>
                    <h6 class="mb-2">$8,6500.20</h6>
                    <div class="progress bg-label-info" style="height: 4px">
                      <div
                        class="progress-bar bg-info"
                        style="width: 75%"
                        role="progressbar"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="d-flex">
                <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                  <img src="{{ asset ('assets/img/icons/misc/aviato.png')}}" alt="aviato" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Aviato</h6>
                    <p class="mb-0">HTML & Angular</p>
                  </div>
                  <div>
                    <h6 class="mb-2">$1,2450.80</h6>
                    <div class="progress bg-label-secondary" style="height: 4px">
                      <div
                        class="progress-bar bg-secondary"
                        style="width: 75%"
                        role="progressbar"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Total Earnings -->

      <!-- Four Cards -->
      <div class="col-xl-4 col-md-6">
        <div class="row gy-6">
          <!-- Total Profit line chart -->
          <div class="col-sm-6">
            <div class="card h-100">
              <div class="card-header pb-0">
                <h4 class="mb-0">$86.4k</h4>
              </div>
              <div class="card-body">
                <div id="totalProfitLineChart" class="mb-3"></div>
                <h6 class="text-center mb-0">Total Profit</h6>
              </div>
            </div>
          </div>
          <!--/ Total Profit line chart -->
          <!-- Total Profit Weekly Project -->
          <div class="col-sm-6">
            <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                <div class="avatar">
                  <div class="avatar-initial bg-secondary rounded-circle shadow-xs">
                    <i class="ri-pie-chart-2-line ri-24px"></i>
                  </div>
                </div>
                <div class="dropdown">
                  <button
                    class="btn text-muted p-0"
                    type="button"
                    id="totalProfitID"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ri-more-2-line ri-24px"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfitID">
                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-1">Total Profit</h6>
                <div class="d-flex flex-wrap mb-1 align-items-center">
                  <h4 class="mb-0 me-2">$25.6k</h4>
                  <p class="text-success mb-0">+42%</p>
                </div>
                <small>Weekly Project</small>
              </div>
            </div>
          </div>
          <!--/ Total Profit Weekly Project -->
          <!-- New Yearly Project -->
          <div class="col-sm-6">
            <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                <div class="avatar">
                  <div class="avatar-initial bg-primary rounded-circle shadow-xs">
                    <i class="ri-file-word-2-line ri-24px"></i>
                  </div>
                </div>
                <div class="dropdown">
                  <button
                    class="btn text-muted p-0"
                    type="button"
                    id="newProjectID"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ri-more-2-line ri-24px"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="newProjectID">
                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-1">New Project</h6>
                <div class="d-flex flex-wrap mb-1 align-items-center">
                  <h4 class="mb-0 me-2">862</h4>
                  <p class="text-danger mb-0">-18%</p>
                </div>
                <small>Yearly Project</small>
              </div>
            </div>
          </div>
          <!--/ New Yearly Project -->
          <!-- Sessions chart -->
          <div class="col-sm-6">
            <div class="card h-100">
              <div class="card-header pb-0">
                <h4 class="mb-0">2,856</h4>
              </div>
              <div class="card-body">
                <div id="sessionsColumnChart" class="mb-3"></div>
                <h6 class="text-center mb-0">Sessions</h6>
              </div>
            </div>
          </div>
          <!--/ Sessions chart -->
        </div>
      </div>
      <!--/ Total Earning -->

      <!-- Sales by Countries -->
      <div class="col-xl-4 col-md-6">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Sales by Countries</h5>
            <div class="dropdown">
              <button
                class="btn text-muted p-0"
                type="button"
                id="saleStatus"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="ri-more-2-line ri-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="saleStatus">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-center mb-4">
                <div class="avatar me-4">
                  <div class="avatar-initial bg-label-success rounded-circle">US</div>
                </div>
                <div>
                  <div class="d-flex align-items-center gap-1 mb-1">
                    <h6 class="mb-0">$8,656k</h6>
                    <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                    <span class="text-success">25.8%</span>
                  </div>
                  <p class="mb-0">United states of america</p>
                </div>
              </div>
              <div class="text-end">
                <h6 class="mb-1">894k</h6>
                <small class="text-muted">Sales</small>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-center mb-4">
                <div class="avatar me-4">
                  <span class="avatar-initial bg-label-danger rounded-circle">UK</span>
                </div>
                <div>
                  <div class="d-flex align-items-center gap-1 mb-1">
                    <h6 class="mb-0">$2,415k</h6>
                    <i class="ri-arrow-down-s-line ri-24px text-danger"></i>
                    <span class="text-danger">6.2%</span>
                  </div>
                  <p class="mb-0">United Kingdom</p>
                </div>
              </div>
              <div class="text-end">
                <h6 class="mb-1">645k</h6>
                <small class="text-muted">Sales</small>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-center mb-4">
                <div class="avatar me-4">
                  <span class="avatar-initial bg-label-warning rounded-circle">IN</span>
                </div>
                <div>
                  <div class="d-flex align-items-center gap-1 mb-1">
                    <h6 class="mb-0">865k</h6>
                    <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                    <span class="text-success"> 12.4%</span>
                  </div>
                  <p class="mb-0">India</p>
                </div>
              </div>
              <div class="text-end">
                <h6 class="mb-1">148k</h6>
                <small class="text-muted">Sales</small>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-center mb-4">
                <div class="avatar me-4">
                  <span class="avatar-initial bg-label-secondary rounded-circle">JA</span>
                </div>
                <div>
                  <div class="d-flex align-items-center gap-1 mb-1">
                    <h6 class="mb-0">$745k</h6>
                    <i class="ri-arrow-down-s-line ri-24px text-danger"></i>
                    <span class="text-danger">11.9%</span>
                  </div>
                  <p class="mb-0">Japan</p>
                </div>
              </div>
              <div class="text-end">
                <h6 class="mb-1">86k</h6>
                <small class="text-muted">Sales</small>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-center">
                <div class="avatar me-4">
                  <span class="avatar-initial bg-label-danger rounded-circle">KO</span>
                </div>
                <div>
                  <div class="d-flex align-items-center gap-1 mb-1">
                    <h6 class="mb-0">$45k</h6>
                    <i class="ri-arrow-up-s-line ri-24px text-success"></i>
                    <span class="text-success">16.2%</span>
                  </div>
                  <p class="mb-0">Korea</p>
                </div>
              </div>
              <div class="text-end">
                <h6 class="mb-1">42k</h6>
                <small class="text-muted">Sales</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Sales by Countries -->

      <!-- Deposit / Withdraw -->
      <div class="col-xl-8">
        <div class="card-group">
          <div class="card mb-0">
            <div class="card-body card-separator">
              <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <h5 class="m-0 me-2">Deposit</h5>
                <a class="fw-medium" href="javascript:void(0);">View all</a>
              </div>
              <div class="deposit-content pt-2">
                <ul class="p-0 m-0">
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-4">
                      <img
                        src="{{ asset ('assets/img/icons/payments/gumroad.png')}}"
                        class="img-fluid"
                        alt="gumroad"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Gumroad Account</h6>
                        <p class="mb-0">Sell UI Kit</p>
                      </div>
                      <h6 class="text-success mb-0">+$4,650</h6>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-4">
                      <img
                        src="{{ asset ('assets/img/icons/payments/mastercard-2.png')}}"
                        class="img-fluid"
                        alt="mastercard"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Mastercard</h6>
                        <p class="mb-0">Wallet deposit</p>
                      </div>
                      <h6 class="text-success mb-0">+$92,705</h6>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-4">
                      <img
                        src="{{ asset ('assets/img/icons/payments/stripes.png')}}"
                        class="img-fluid"
                        alt="stripes"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Stripe Account</h6>
                        <p class="mb-0">iOS Application</p>
                      </div>
                      <h6 class="text-success mb-0">+$957</h6>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-4">
                      <img
                        src="{{ asset ('assets/img/icons/payments/american-bank.png')}}"
                        class="img-fluid"
                        alt="american"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">American Bank</h6>
                        <p class="mb-0">Bank Transfer</p>
                      </div>
                      <h6 class="text-success mb-0">+$6,837</h6>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-4">
                      <img
                        src="{{ asset ('assets/img/icons/payments/citi.png')}}"
                        class="img-fluid"
                        alt="citi"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Bank Account</h6>
                        <p class="mb-0">Wallet deposit</p>
                      </div>
                      <h6 class="text-success mb-0">+$446</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card mb-0">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <h5 class="m-0 me-2">Withdraw</h5>
                <a class="fw-medium" href="javascript:void(0);">View all</a>
              </div>
              <div class="withdraw-content pt-2">
                <ul class="p-0 m-0">
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-4">
                      <img
                        src="{{ asset ('assets/img/icons/brands/google.png')}}"
                        class="img-fluid"
                        alt="google"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Google Adsense</h6>
                        <p class="mb-0">Paypal deposit</p>
                      </div>
                      <h6 class="text-danger mb-0">-$145</h6>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-4">
                      <img
                        src="{{ asset ('assets/img/icons/brands/github.png')}}"
                        class="img-fluid"
                        alt="github"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Github Enterprise</h6>
                        <p class="mb-0">Security &amp; compliance</p>
                      </div>
                      <h6 class="text-danger mb-0">-$1870</h6>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-4">
                      <img
                        src="{{ asset ('assets/img/icons/brands/slack.png')}}"
                        class="img-fluid"
                        alt="slack"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Upgrade Slack Plan</h6>
                        <p class="mb-0">Debit card deposit</p>
                      </div>
                      <h6 class="text-danger mb-0">$450</h6>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-4">
                      <img
                        src="{{ asset ('assets/img/icons/payments/digital-ocean.png')}}"
                        class="img-fluid"
                        alt="digital"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Digital Ocean</h6>
                        <p class="mb-0">Cloud Hosting</p>
                      </div>
                      <h6 class="text-danger mb-0">-$540</h6>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-4">
                      <img
                        src="{{ asset ('assets/img/icons/brands/aws.png')}}"
                        class="img-fluid"
                        alt="aws"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">AWS Account</h6>
                        <p class="mb-0">Choosing a Cloud Platform</p>
                      </div>
                      <h6 class="text-danger mb-0">-$21</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Deposit / Withdraw -->

      <!-- Data Tables -->
      <div class="col-12">
        <div class="card overflow-hidden">
          <div class="table-responsive">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th class="text-truncate">User</th>
                  <th class="text-truncate">Email</th>
                  <th class="text-truncate">Role</th>
                  <th class="text-truncate">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-4">
                        <img src="{{ asset ('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Jordan Stevenson</h6>
                        <small class="text-truncate">@amiccoo</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">susanna.Lind57@gmail.com</td>
                  <td class="text-truncate">
                    <div class="d-flex align-items-center">
                      <i class="ri-vip-crown-line ri-22px text-primary me-2"></i>
                      <span>Admin</span>
                    </div>
                  </td>
                  <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-4">
                        <img src="{{ asset ('assets/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Benedetto Rossiter</h6>
                        <small class="text-truncate">@brossiter15</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">estelle.Bailey10@gmail.com</td>
                  <td class="text-truncate">
                    <div class="d-flex align-items-center">
                      <i class="ri-edit-box-line text-warning ri-22px me-2"></i>
                      <span>Editor</span>
                    </div>
                  </td>
                  <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-4">
                        <img src="{{ asset ('assets/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Bentlee Emblin</h6>
                        <small class="text-truncate">@bemblinf</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">milo86@hotmail.com</td>
                  <td class="text-truncate">
                    <div class="d-flex align-items-center">
                      <i class="ri-computer-line text-danger ri-22px me-2"></i>
                      <span>Author</span>
                    </div>
                  </td>
                  <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-4">
                        <img src="{{ asset ('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Bertha Biner</h6>
                        <small class="text-truncate">@bbinerh</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">lonnie35@hotmail.com</td>
                  <td class="text-truncate">
                    <div class="d-flex align-items-center">
                      <i class="ri-edit-box-line text-warning ri-22px me-2"></i>
                      <span>Editor</span>
                    </div>
                  </td>
                  <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-4">
                        <img src="{{ asset ('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Beverlie Krabbe</h6>
                        <small class="text-truncate">@bkrabbe1d</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">ahmad_Collins@yahoo.com</td>
                  <td class="text-truncate">
                    <div class="d-flex align-items-center">
                      <i class="ri-pie-chart-2-line ri-22px text-info me-2"></i>
                      <span>Maintainer</span>
                    </div>
                  </td>
                  <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-4">
                        <img src="{{ asset ('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Bradan Rosebotham</h6>
                        <small class="text-truncate">@brosebothamz</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">tillman.Gleason68@hotmail.com</td>
                  <td class="text-truncate">
                    <div class="d-flex align-items-center">
                      <i class="ri-edit-box-line text-warning ri-22px me-2"></i>
                      <span>Editor</span>
                    </div>
                  </td>
                  <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-4">
                        <img src="{{ asset ('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Bree Kilday</h6>
                        <small class="text-truncate">@bkildayr</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">otho21@gmail.com</td>
                  <td class="text-truncate">
                    <div class="d-flex align-items-center">
                      <i class="ri-user-3-line ri-22px text-success me-2"></i>
                      <span>Subscriber</span>
                    </div>
                  </td>
                  <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                </tr>
                <tr class="border-transparent">
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-4">
                        <img src="{{ asset ('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Breena Gallemore</h6>
                        <small class="text-truncate">@bgallemore6</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">florencio.Little@hotmail.com</td>
                  <td class="text-truncate">
                    <div class="d-flex align-items-center">
                      <i class="ri-user-3-line ri-22px text-success me-2"></i>
                      <span>Subscriber</span>
                    </div>
                  </td>
                  <td><span class="badge bg-label-secondary rounded-pill">Inactive</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--/ Data Tables -->
    </div>
  </div>
@endsection
