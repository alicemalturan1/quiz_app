import 'package:http/http.dart' as http;
import 'package:flutter/widgets.dart';
import 'package:get/get.dart';
import 'package:quiz/constants.dart';
import 'package:quiz/screens/score.dart';

class QuestionController extends GetxController with GetTickerProviderStateMixin{
    late int _correctAns;
    int get correctAns => this._correctAns;
    bool _isAnswered=false;
    bool get isAnswered =>this._isAnswered;
    bool _isFinished=false;
    bool get isFinished=>this._isFinished;

    late PageController pageController;




    int _numOfCorrectAns = 0;
    int get numOfCorrectAns => this._numOfCorrectAns;

     var question_length = 0.obs;


    late int _selectedAns;
    int get selectedAns => this._selectedAns;

    RxInt _questionNumber = 1.obs;
    RxInt get questionNumber => this._questionNumber;

    final is_loadedquestions=false.obs;

    late AnimationController _animationController;
    late Animation _animation;

    Animation get animation=>this._animation;

@override
  void onInit() {
    pageController= PageController();
    super.onInit();
  }

    @override
    void onClose() {
      try{
        _animationController.dispose();
        pageController.dispose();
      }catch(e){}
      _isAnswered=false;
      _questionNumber.value=1;
      _isFinished=true;

      super.onClose();
    }
    void InitAnim(){
      _isFinished=false;
      _isAnswered=false;
      _animationController =  AnimationController(duration:Duration(seconds: 30),vsync:this)..forward();
      _animation=Tween(begin: 0.0,end: 1.0).animate(_animationController)..addListener(() {

        update();
      })..addStatusListener((status) {
        if(status ==AnimationStatus.completed){
          nextQuestion();
        }else if(status ==AnimationStatus.dismissed){
          _animationController.forward();
        }
      });

    }


    void checkAns(is_true,int selected){
      if(!isAnswered){
        _isAnswered=true;
        _selectedAns=selected;
        if(is_true==1) _numOfCorrectAns++;
        _animationController.stop();
        update();
        Future.delayed(Duration(seconds: 1),(){
            nextQuestion();
        });
      }
    }
    void nextQuestion(){
      if(questionNumber.value < question_length.value){
        _isAnswered=false;
        questionNumber.value++;
        pageController.nextPage(duration: Duration(milliseconds: 250), curve: Curves.ease);
        _animationController.reset();
        _animationController.forward().whenComplete(()=>nextQuestion);
      }else{
        if(!_isFinished){

          _isAnswered=false;
          _questionNumber.value=1;
          _animationController.reset();
          pageController.dispose();
          _isFinished=true;
          Get.off(()=>ScoreScreen(max: question_length.value*10,score: numOfCorrectAns*10,));
        }

      }
    }


    Future getQuestions(String quiz_id) async{

        return await http.get(Uri.parse(api_host+'/api/getQuestionsAndAnswers/'+quiz_id));
    }







}