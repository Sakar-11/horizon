<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Approval;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function sendmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message'  => 'min:10'
        ]);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
        Mail::send('frontend/mail', $data, function ($msg) use ($data) {
            $msg->from($data['email']);
            $msg->to('sakarvaidya72527@gmail.com');
            $msg->subject($data['subject']);
        });
        return redirect('/success')->with('status', "Your message has been sent. Thank you!");
    }
    public function success()
    {
        return view('frontend.success');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function career()
    {
        return view('frontend.career');
    }
    public function gallery()
    {
        return view('frontend.gallery');
    }
    public function bim()
    {
        return view('frontend/bim/bim-services');
    }

    public function subbim($slug1)
    {
        if ($slug1 == 'third-party-bim-model-auditing') {
            return view('frontend/bim/bim-service1');
        }
        if ($slug1 == 'bim-coordination-fabrication') {
            return view('frontend/bim/bim-service2');
        }
        if ($slug1 == 'bim-for-fm') {
            return view('frontend/bim/bim-service3');
        }
        if ($slug1 == '3d-laser-scanning-scan-bim') {
            return view('frontend/bim/bim-service4');
        }
    }
    public function singlebim($slug1, $slug2)
    {
        if ($slug1 == 'third-party-bim-model-auditing' && $slug2 == 'bim-modeling-services') {
            return view('frontend/bim/bim-service1-1');
        }
        if ($slug1 == 'third-party-bim-model-auditing' && $slug2 == 'construction-drawings') {
            return view('frontend/bim/bim-service1-2');
        }
        if ($slug1 == 'third-party-bim-model-auditing' && $slug2 == '3d-virtual-presentationsvisualization') {
            return view('frontend/bim/bim-service1-3');
        }
        if ($slug1 == 'third-party-bim-model-auditing' && $slug2 == 'site-bim-support') {
            return view('frontend/bim/bim-service1-4');
        }
        if ($slug1 == 'third-party-bim-model-auditing' && $slug2 == 'built-modelingproject-close') {
            return view('frontend/bim/bim-service1-5');
        }
        if ($slug1 == 'third-party-bim-model-auditing' && $slug2 == 'third-party-bim-model-auditing') {
            return view('frontend/bim/bim-service1-6');
        }




        if ($slug1 == 'bim-coordination-fabrication' && $slug2 == 'bim-coordination') {
            return view('frontend/bim/bim-service2-1');
        }
        if ($slug1 == 'bim-coordination-fabrication' && $slug2 == 'building-conflict-reporting-clash-detection') {
            return view('frontend/bim/bim-service2-2');
        }
        if ($slug1 == 'bim-coordination-fabrication' && $slug2 == 'procurement-quantity-take-offs-qto') {
            return view('frontend/bim/bim-service2-3');
        }
        if ($slug1 == 'bim-coordination-fabrication' && $slug2 == '4d-scheduling-construction-sequencing') {
            return view('frontend/bim/bim-service2-4');
        }
        if ($slug1 == 'bim-coordination-fabrication' && $slug2 == '5d-cost-estimation') {
            return view('frontend/bim/bim-service2-5');
        }
        if ($slug1 == 'bim-coordination-fabrication' && $slug2 == 'bim-prefabrication-fabrication') {
            return view('frontend/bim/bim-service2-6');
        }


        if ($slug1 == 'bim-for-fm' && $slug2 == '6d-bim-facility-management') {
            return view('frontend/bim/bim-service3-1');
        }
        if ($slug1 == 'bim-for-fm' && $slug2 == 'cobie') {
            return view('frontend/bim/bim-service3-2');
        }
        if ($slug1 == '3d-laser-scanning-scan-bim' && $slug2 == '3d-laser-scanning') {
            return view('frontend/bim/bim-service4-1');
        }
        if ($slug1 == '3d-laser-scanning-scan-bim' && $slug2 == 'scan-to-bim') {
            return view('frontend/bim/bim-service4-2');
        }
    }
    public function structural()
    {
        return view('frontend/structural-design-consulting');
    }
    public function safety()
    {
        return view('frontend/safety-consulting-and-auditing');
    }
    public function teachers()
    {
        return view('frontend/teacher/all-teacher');
    }
    public function singleteacher($slug)
    {
        if ($slug == 'eid-ashry') {
            return view('frontend/teacher/single');
        }
    }
    public function courses()
    {
        return view('frontend/course/courses');
    }
    public function singleCourse($slug)
    {
        if ($slug == 'certified-associate-in-project-management') {
            $all = $this->approveRes($slug);
            $user = $all['user'];
            $approvalstatus = $all['approvalstatus'];
            return view('frontend/course/single-course');
        }
        if ($slug == 'planning-scheduling-professional-psp') {
            $all = $this->approveRes($slug);
            $user = $all['user'];
            $approvalstatus = $all['approvalstatus'];
            return view('frontend/course/psp', compact('user', 'approvalstatus'));
        }
        if ($slug == 'project-management-professional-pmp') {

            $all = $this->approveRes($slug);
            $user = $all['user'];
            $approvalstatus = $all['approvalstatus'];
            return view('frontend/course/pmp', compact('user', 'approvalstatus'));
        }
        if ($slug == 'ccp-certified-cost-professional-aace-usa') {
            $all = $this->approveRes($slug);
            $user = $all['user'];
            $approvalstatus = $all['approvalstatus'];
            return view('frontend/course/ccp', compact('user', 'approvalstatus'));
        }
        if ($slug == 'scheduling-professional-exam-preparation-pmi-sp') {
            $all = $this->approveRes($slug);
            $user = $all['user'];
            $approvalstatus = $all['approvalstatus'];

            return view('frontend/course/sp', compact('user', 'approvalstatus'));
        }
        if ($slug == 'agile-certified-practitioner-pmi-acp-pmi') {
            $all = $this->approveRes($slug);
            $user = $all['user'];
            $approvalstatus = $all['approvalstatus'];
            return view('frontend/course/acp', compact('user', 'approvalstatus'));
        }
        if ($slug == 'risk-management-professional-pmi-rmp') {
            $all = $this->approveRes($slug);
            $user = $all['user'];
            $approvalstatus = $all['approvalstatus'];
            return view('frontend/course/rmp', compact('user', 'approvalstatus'));
        }
    }

    public function approveRes($slug)
    {
        $user = null;
        $approvalstatus = null;

        if (Auth::user()) {
            $user =  User::find(Auth::user()->id);

            if ($approvalstatus = Approval::where('user_id', $user->id)->where('slug', $slug)->first()) {
                $approvalstatus = Approval::where('slug', $slug)->where('user_id', $user->id)->first();
                if ($approvalstatus->status == 1) {
                    $approvalstatus = 'Approved';
                } else {
                    $approvalstatus = 'Admin Will Approve Your Request';
                }
            } else {
                $approvalstatus = 'Request Approval';
            }
        }
        return ['user' => $user, 'approvalstatus' => $approvalstatus];
    }



    // public function myAccount()
    // {
    //     $user =  User::find(Auth::user()->id);
    //     Approval::where('user_id', $user->id)->get();
    // }
}


// slug
// access
// user_id