<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <title>Sohbet</title>
</head>
<body>
    <div class="justify-content-center" style="display: flex; justify-content: center; align-items:center;">
        <div class="card col-md-6 direct-chat direct-chat-primary" style="height: 70vh; ">
            <div class="card-header">
                <h3 class="card-title">İletişim</h3>

            </div>
            <div class="card-body">
                <div class="direct-chat-messages" style="height: 100%" >
                    @foreach ($messages as $message)
                    @if (!($message->sender_id == Auth::user()->id))
                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">1 </span>
                            <span class="direct-chat-timestamp float-right">{{$message->created_at}}</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                                <div class="direct-chat-text">
                                    {{$message->message}}
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                        @else
                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">{{Auth::user()->email}}</span>
                                    <span class="direct-chat-timestamp float-left">{{$message->created_at}}</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <div class="direct-chat-text">
                                    {{$message->message}}
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                        @endif
                    @endforeach
                </div>
                <!--/.direct-chat-messages-->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <form action="{{route('userChatPost.post')}}" method="post">
                    @csrf
                    <div class="input-group">
                        <input name="message" placeholder="Mesaj yaz..." class="form-control">
                        <input name="sender_id" value="{{Auth::user()->id}}" hidden>
                        <input name="receiver_id" value="1" hidden>
                        <span class="input-group-append">
                            <button type="submit" class="btn btn-primary">Gönder</button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- /.card-footer-->
        </div>
        <script>
            const messagesDiv = document.querySelector('.direct-chat-messages');
              messagesDiv.scrollTop = messagesDiv.scrollHeight;
        </script>

        <!--/.direct-chat -->
    </div>
</body>
</html>
