/*

 * jQuery UI Droppable 1.6

 *

 * Copyright (c) 2008 AUTHORS.txt (http://ui.jquery.com/about)

 * Dual licensed under the MIT (MIT-LICENSE.txt)

 * and GPL (GPL-LICENSE.txt) licenses.

 *

 * http://docs.jquery.com/UI/Droppables

 *

 * Depends:

 *	ui.core.js

 *	ui.draggable.js

 */
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(8(A){A.1h("5.e",{1N:8(){9 C=3.4,B=C.d;3.f=0;3.j=1;3.4.d=3.4.d&&A.1q(3.4.d)?3.4.d:8(D){a D.1s(B)};3.n={p:3.6[0].1t,k:3.6[0].1u};A.5.c.l[3.4.m]=A.5.c.l[3.4.m]||[];A.5.c.l[3.4.m].1M(3);(3.4.15&&3.6.18(3.4.15+"-e"))},1F:8(){9 B=A.5.c.l[3.4.m];10(9 C=0;C<B.U;C++){7(B[C]==3){B.1E(C,1)}}3.6.y("5-e-x").1B("e").1z(".e")},1n:8(B,C){7(B=="d"){3.4.d=C&&A.1q(C)?C:8(D){a D.1s(d)}}1A{A.1h.1L.1n.1I(3,1H)}},1o:8(C){9 B=A.5.c.q;A.5.o.b(3,"17",[C,3.5(B)]);7(B){3.6.P("1G",[C,3.5(B)],3.4.17)}},1i:8(C){9 B=A.5.c.q;A.5.o.b(3,"16",[C,3.5(B)]);7(B){3.6.P("1K",[C,3.5(B)],3.4.16)}},14:8(C){9 B=A.5.c.q;7(!B||(B.g||B.6)[0]==3.6[0]){a}7(3.4.d.b(3.6,(B.g||B.6))){A.5.o.b(3,"12",[C,3.5(B)]);3.6.P("1Q",[C,3.5(B)],3.4.12)}},1a:8(C){9 B=A.5.c.q;7(!B||(B.g||B.6)[0]==3.6[0]){a}7(3.4.d.b(3.6,(B.g||B.6))){A.5.o.b(3,"11",[C,3.5(B)]);3.6.P("1R",[C,3.5(B)],3.4.11)}},1p:8(C,D){9 B=D||A.5.c.q;7(!B||(B.g||B.6)[0]==3.6[0]){a h}9 E=h;3.6.1j(":T(e)").1P(".5-1r-1O").1b(8(){9 F=A.T(3,"e");7(F.4.1c&&A.5.t(B,A.1k(F,{i:F.6.i()}),F.4.X)){E=1D;a h}});7(E){a h}7(3.4.d.b(3.6,(B.g||B.6))){A.5.o.b(3,"u",[C,3.5(B)]);3.6.P("u",[C,3.5(B)],3.4.u);a 3.6}a h},1S:{},5:8(B){a{1r:(B.g||B.6),1f:B.1f,s:B.s,1w:B.Q,4:3.4,6:3.6}}});A.1k(A.5.e,{1C:"@1x",1y:{d:"*",S:v,15:"5",1c:h,R:v,m:"13",X:"t"}});A.5.t=8(O,I,M){7(!I.i){a h}9 D=(O.Q||O.s.Y).Z,C=D+O.r.p,L=(O.Q||O.s.Y).V,K=L+O.r.k;9 F=I.i.Z,B=F+I.n.p,N=I.i.V,J=N+I.n.k;1J(M){W"25":a(F<D&&C<B&&N<L&&K<J);z;W"t":a(F<D+(O.r.p/2)&&C-(O.r.p/2)<B&&N<L+(O.r.k/2)&&K-(O.r.k/2)<J);z;W"27":9 G=((O.Q||O.s.Y).Z+(O.1m||O.i.1e).Z),H=((O.Q||O.s.Y).V+(O.1m||O.i.1e).V),E=A.5.28(H,G,N,F,I.n.k,I.n.p);a E;z;W"26":a((L>=N&&L<=J)||(K>=N&&K<=J)||(L<N&&K>J))&&((D>=F&&D<=B)||(C>=F&&C<=B)||(D<F&&C>B));z;13:a h;z}};A.5.c={q:v,l:{"13":[]},1l:8(E,G){9 B=A.5.c.l[E.4.m];9 F=G?G.23:v;9 H=(E.g||E.6).1j(":T(e)").1T();1g:10(9 D=0;D<B.U;D++){7(B[D].4.x||(E&&!B[D].4.d.b(B[D].6,(E.g||E.6)))){19}10(9 C=0;C<H.U;C++){7(H[C]==B[D].6[0]){B[D].n.k=0;19 1g}}B[D].w=B[D].6.1X("1W")!="24";7(!B[D].w){19}B[D].i=B[D].6.i();B[D].n={p:B[D].6[0].1t,k:B[D].6[0].1u};7(F=="1U"||F=="1Y"){B[D].1o.b(B[D],G)}}},u:8(B,C){9 D=h;A.1b(A.5.c.l[B.4.m],8(){7(!3.4){a}7(!3.4.x&&3.w&&A.5.t(B,3,3.4.X)){D=3.1p.b(3,C)}7(!3.4.x&&3.w&&3.4.d.b(3.6,(B.g||B.6))){3.j=1;3.f=0;3.1i.b(3,C)}});a D},1Z:8(B,C){7(B.4.22){A.5.c.1l(B,C)}A.1b(A.5.c.l[B.4.m],8(){7(3.4.x||3.1d||!3.w){a}9 E=A.5.t(B,3,3.4.X);9 G=!E&&3.f==1?"j":(E&&3.f==0?"f":v);7(!G){a}9 F;7(3.4.1c){9 D=3.6.21(":T(e):20(0)");7(D.U){F=A.T(D[0],"e");F.1d=(G=="f"?1:0)}}7(F&&G=="f"){F["f"]=0;F["j"]=1;F.1a.b(F,C)}3[G]=1;3[G=="j"?"f":"j"]=0;3[G=="f"?"14":"1a"].b(3,C);7(F&&G=="j"){F["j"]=0;F["f"]=1;F.14.b(F,C)}})}};A.5.o.1v("e","S",{17:8(B,C){A(3).18(C.4.S)},16:8(B,C){A(3).y(C.4.S)},u:8(B,C){A(3).y(C.4.S)}});A.5.o.1v("e","R",{12:8(B,C){A(3).18(C.4.R)},11:8(B,C){A(3).y(C.4.R)},u:8(B,C){A(3).y(C.4.R)}})})(1V)',62,133,'|||this|options|ui|element|if|function|var|return|call|ddmanager|accept|droppable|isover|currentItem|false|offset|isout|height|droppables|scope|proportions|plugin|width|current|helperProportions|position|intersect|drop|null|visible|disabled|removeClass|break||||||||||||||||triggerHandler|positionAbs|hoverClass|activeClass|data|length|top|case|tolerance|absolute|left|for|out|over|default|_over|cssNamespace|deactivate|activate|addClass|continue|_out|each|greedy|greedyChild|click|helper|droppablesLoop|widget|_deactivate|find|extend|prepareOffsets|clickOffset|_setData|_activate|_drop|isFunction|draggable|is|offsetWidth|offsetHeight|add|absolutePosition|VERSION|defaults|unbind|else|removeData|version|true|splice|destroy|dropactivate|arguments|apply|switch|dropdeactivate|prototype|push|_init|dragging|not|dropover|dropout|plugins|andSelf|dragstart|jQuery|display|css|sortactivate|drag|eq|parents|refreshPositions|type|none|fit|touch|pointer|isOver'.split('|'),0,{}))
