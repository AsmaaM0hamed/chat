<div wire:poll>
    <div class="container">
        <h3 class=" text-center">


            مورا سوفت
        </h3>
        <div class="messaging">
            <div class="inbox_msg">
                <div class="mesgs">
                    <div id="chat" style="background-color: beige" class="msg_history">
                        @forelse ($messages as $message)

                            @if ($message->user->name == auth()->user()->name)
                                <!-- Reciever Message-->
                                <div class="outgoing_msg">
                                    <div class="sent_msg" style="background-color: bisque;">
                                        <p style="color: red;margin: 7px">{{ $message->MsgText }}</p>
                                        <span  class="time_date">
                                            {{ $message->created_at->diffForHumans(null, false, false) }}</span>
                                    </div>
                                </div>

                            @else

                                <div class="incoming_msg">{{ $message->user->name }}
                                    <div style="  display: inline-block;
                                    width: 6%;"> <img
                                            src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                    <div style="display: inline-block;
                                    padding: 0 0 0 10px;
                                    vertical-align: top;
                                    width: 92%;">
                                        <div class="received_withd_msg">
                                            <p>{{ $message->MsgText }}</p>
                                            <span
                                                class="time_date">{{ $message->created_at->diffForHumans(null, false, false) }}</span>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        @empty
                            <h5 style="text-align: center;color:red"> لاتوجد رسائل سابقة</h5>
                        @endforelse

                    </div>
                    <div class="type_msg">
                        <div class="input_msg_write">
                            <form wire:submit.prevent="sendMessage">
                                <input onkeydown='scrollDown()' wire:model.defer="messageText" type="text"
                                    class="write_msg" placeholder="اكتب رسالتك" />
                                <button class="msg_send_btn" type="submit">ارسال</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
