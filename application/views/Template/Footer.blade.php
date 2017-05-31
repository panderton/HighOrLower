            </div><!--Main-->
            <footer>
                <div class="pull-right">
                    Created by Phil Anderton
                </div>
                <div class="clearfix"></div>
            </footer>
        </div><!--Container-->
        <!-- Modals -->
        @forelse($extensions as $ext)
            @include($ext)
        @empty
        @endforelse
    </div><!--Wrapper-->
    <!--Core JQuery-->
    <script type="text/javascript" src="/HigherOrLower/bootstrap/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/HigherOrLower/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/HigherOrLower/js/custom.js"></script>
    <script type="text/javascript" src="/HigherOrLower/bootstrap/js/bootstrap.min.js"></script>
    <!--Each Page JQuery-->
    </body>
</html>
