<x-panel class="flex gap-x-6">
<div>
       <x-employer-logo />

      <x-employer-logo :employer="$job->employer" />


       </div>
           
        
       <div class="flex-1 flex-col"> 
         <a href="#" class="py-8 font-bold"iv class="self-start text-sn text-gray-400 transition-colors duration-300">{{ $job->employer->name }}</a>
       
             <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">{{ $job->title }}</h3>

             <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="text-sn text-gray-400 mt-auto">{{ $job->salary }}</p>
       
        </div>
     
            <div>
              @foreach($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
                
            </div>
            
        
        </x-panel>