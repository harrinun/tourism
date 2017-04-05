<section class="awe-parallax category-heading-section-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="category-heading-content category-heading-content__2 text-uppercase">
            <!-- BREADCRUMB -->
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><span>{{$page}}s</span></li>
                </ul>
            </div>
            <!-- BREADCRUMB -->
            <div class="find">
                <h2 class="text-center">Find Your {{$page}}</h2>
                <form>
                    <div class="form-group">
                        <div class="form-elements">
                            <label>Location</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-marker-1"></i>
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-elements">
                            <label>Check in</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-calendar"></i>
                                <input type="text" class="awe-calendar" value="Date">
                            </div>
                        </div>
                        <div class="form-elements">
                            <label>Check out</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-calendar"></i>
                                <input type="text" class="awe-calendar" value="Date">
                            </div>
                        </div>
                        <div class="form-elements">
                            <label>Budget</label>
                            <div class="form-item">
                                <select class="awe-select">
                                    <option>All types</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-actions">
                            <input type="submit" value="Find My {{$page}}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>