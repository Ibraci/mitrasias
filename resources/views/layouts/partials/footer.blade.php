                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <div class="page-footer">
                <div class="footer-grid container">
                    <div class="footer-l white">&nbsp;</div>
                    <div class="footer-grid-l white">

                    </div>
                    <div class="footer-r white">&nbsp;</div>

                </div>
            </div>
        </div>



        <!-- Javascripts -->
        <script src="{{asset('assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
        <script src="{{asset('assets/plugins/materialize/js/materialize.min.js')}}"></script>
        <script src="{{asset('assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
        <script src="{{asset('assets/js/alpha.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

        <script>
        function deletedc(x1) {

            if(confirm("Are you sure you want to delete this?"))
            {
                btn2 = $(x1).data('panel-id');

                $.ajax({
                    url:"delectbarcode.php",
                    method:"POST",
                    data:{id:btn2},
                    dataType:"text",
                    success:function(data){
                        alert(data);
                        window.location="/"
                    }
                });
            }
        }
        </script>
</body>
</html>
